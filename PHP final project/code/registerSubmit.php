
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//database connection and verification
$database = mysqli_connect("localhost","root","root","test");

if(!$database){
    die("connect failed");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


//password hashing
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


//database insertion

$sql = " INSERT INTO users (username, email, password)
VALUES('$username', '$email','$hashed_password')"; 


if( mysqli_query($database,$sql)){
    echo "registration successful!";
}else {
    echo "Error:".mysqli_error($database);
    }
}
header("location: login.php");
exit;
?>

