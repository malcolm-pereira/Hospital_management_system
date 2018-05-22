<?php
include('connect.php');
connectdb();
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql="select name from user where email='$user_check'";
$ses_sql = $conn->query($sql);
$row = $ses_sql->fetch_assoc();
$login_session =$row['name'];
if(!isset($login_session)){
mysql_close($conn); // Closing Connection
header('Location: login.html'); // Redirecting To Home Page
}
?>