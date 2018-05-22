<?php 
$admin =$password ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $admin = $_POST["admin"];
  $password = $_POST["passwd"];
}
if($admin=="admin" && $password=="admin")
{
	header("location:admin_home.html");
}
else
{
	echo '<h1><center><b>invalid</h1>';
	echo("<button style= \" background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;\" onclick=\"location.href='admin_login.html'\">Back</button>");
}

?>