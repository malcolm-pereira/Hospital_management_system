<html>
<?php include('session.php');
?>
<head>
<title>home</title>
<style>
.navbar{
 overflow:hidden;
 background-color:#4CAF50;
 font-family:Arial,Helvetica,sans-serif;
 }
 .navbar a{
  float:left;
  font-size:16px;
  color:white;
  text-align:center;
  padding:14px 16px;
  text-decoration:none;
  }
  .navbar a:hover{
  background-color:red;
  }
  h1{
  color:red;
  }
</style>
</head>
<body>
<h1><center>WELCOME <?php echo $login_session;?></center></h1>
<div class="navbar">
 <a href="userhome.php">Home</a>
 <a href="booking.html">Book Appointment</a>
 <a href="history.php">History</a>
 <a href="logout.php">Logout</a>
</div>
<h1><center>Book appointments anytime and anywhere</h1>
</body>
</html>