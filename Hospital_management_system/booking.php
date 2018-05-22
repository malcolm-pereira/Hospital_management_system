<?php
include('session.php');
$name = $date = $time = $doctor="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $doctor = $_POST['doctor'];
}
$user=$login_session;
$sql = "INSERT INTO booking(name,date,time,doctor,username)
VALUES ('$name','$date','$time','$doctor','$user')";
if ($conn->query($sql) === TRUE) {
    echo "Booking Confirmed";
	echo("<button style= \" background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;\" onclick=\"location.href='login.html'\">Back to home </button>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>