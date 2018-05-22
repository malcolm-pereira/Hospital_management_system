<?php
session_start();
include('connect.php');
$email =$password ="";
global $username;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["user"];
  $password = $_POST["passwd"];
}
	connectdb();
$sql = "SELECT * FROM user where email='$email' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 $_SESSION['login_user']=$email;
	header("location:userhome.php");
} else {
    echo "invalid";
}
$conn->close();
?>