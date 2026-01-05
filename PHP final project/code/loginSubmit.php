<?php
session_start();

$error = "";

$database = mysqli_connect("localhost", "root", "root", "test");

if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $database -> prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();

    $result = $stmt-> get_result();

    if($result->num_rows === 1){
        $user = $result-> fetch_assoc();
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // 2️ redirect instead of echo
            header("Location: addGame.php");
            exit;

        }else{
           $_SESSION['error']  = "wrong password";
           header("Location: login.php");
            exit;
        }
    }else{
       $_SESSION['error']  = "user not fount";
       header("Location: login.php");
            exit;
    }
}

    ?>