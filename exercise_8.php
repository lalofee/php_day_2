<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>insert data in table</title>
</head>

<body>
	
<?php
//Display all the records from MySQL table using PHP and MySQL.


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM myguests";
$res = $conn ->query($sql);

if ($res->num_rows > 0)  {
    while($i = $res->fetch_assoc()) {
    	echo "id:" . $i["id"] . "Name: " . $i["firstname"];
    	}
}

$conn->close();



?>

</body>
</html>
