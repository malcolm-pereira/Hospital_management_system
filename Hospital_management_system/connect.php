<?php

function connectdb()
{
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "hospital_management_system";

 global $conn;
$conn = new mysqli($servername, $username, $pass,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
}
?>