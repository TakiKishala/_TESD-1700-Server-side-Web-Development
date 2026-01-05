<?php
session_start();

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode([]);
    exit();
}

try {
    $database = new mysqli("localhost", "root", "root", "test");

    $user_id = $_SESSION['user_id'];

    $stmt = $database->prepare("
        SELECT name, platform, note, image
        FROM games
        WHERE user_id = ?
    ");

    $stmt->bind_param("i", $user_id);
    $stmt->execute();

    $result = $stmt->get_result();

    $games = [];
    while ($row = $result->fetch_assoc()) {
        $games[] = $row;
    }

    echo json_encode($games);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
