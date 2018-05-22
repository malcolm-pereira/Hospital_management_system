<?php 
include('connect.php');
connectdb();
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
} else {
    echo '<center><h1><b>No appointments</h1>';
}
$conn->close();
?>
<html>
<head>
	<title>Appointments</title>
	<link rel="stylesheet" href="history_style.css">
</head>
<body>
	<h1>Appointments</h1>
	<hr>
	<table class="data-table">
		<thead>
			<tr>
				<th>PATIENT NAME</th>
				<th>DATE</th>
				<th>TIME</th>
				<th>DOCTOR</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while($row=$result->fetch_assoc())
		{
			echo '<tr>
					<td>'.$row['name'].'</td>
					<td>'.$row['date'].'</td>
					<td>'.$row['time'].'</td>
					<td>'.$row['doctor'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	<br>
	<div class="clearfix">
  <center><button type="button" class="cancelbtn" onclick="window.location='admin_home.html';">Back</button>
  </div>
  
</body>
</html>