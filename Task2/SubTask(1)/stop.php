<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Stop</title>
</head>

<body>
<?php
$conn = mysqli_connect("localhost:3306", "root", "", "IOT");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT stop FROM remote";
$result = $conn->query($sql);

	
//showing data
while($row = $result->fetch_assoc()) {
echo "<tr>
	  <td>". $row["stop"]."</td> 
	  </tr>";
}

$conn->close();
?>
	
</body>
</html>