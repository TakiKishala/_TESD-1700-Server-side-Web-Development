<?php
session_start();
header("Content-Type: application/json");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "error" => "Not authenticated"]);
    exit();
}

$database = new mysqli("localhost", "root", "root", "test");

/* FORM DATA */
$name     = $_POST["name"] ?? "";
$platform = $_POST["platform"] ?? "";
$note     = $_POST["note"] ?? "";
$user_id  = $_SESSION["user_id"];

/* BASIC VALIDATION */
if ($name === "" || $platform === "") {
    echo json_encode(["success" => false, "error" => "Missing fields"]);
    exit();
}

/* DEFAULT IMAGE VALUE */
$imageName = null;

/* IMAGE UPLOAD (OPTIONAL) */
if (!empty($_FILES["image"]["name"])) {

    $allowed = ["jpg", "jpeg", "png", "webp"];
    $ext = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
        echo json_encode(["success" => false, "error" => "Invalid image type"]);
        exit();
    }

    $uploadDir = "uploads/games/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $imageName = uniqid("game_", true) . "." . $ext;
    $target = $uploadDir . $imageName;

    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo json_encode(["success" => false, "error" => "Upload failed"]);
        exit();
    }
}

/* INSERT INTO DATABASE */
$stmt = $database->prepare(
    "INSERT INTO games (user_id, name, platform, note, image)
     VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    "issss",
    $user_id,
    $name,
    $platform,
    $note,
    $imageName
);

$stmt->execute();

/* RESPONSE */
echo json_encode([
    "success"  => true,
    "name"     => $name,
    "platform" => $platform,
    "note"     => $note,
    "image"    => $imageName 
]);
