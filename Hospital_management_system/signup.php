<?php
include('connect.php');
$name = $email = $gender = $password =$age ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $password = $_POST["password"];
  $gender = $_POST["gender"];
}
connectdb();
$sql = "INSERT INTO user(name,age,gender,email,password)
VALUES ('$name','$age','$gender','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Account created successfully";
	echo("<button style= \" background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;\" onclick=\"location.href='login.html'\">Back to login</button>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>