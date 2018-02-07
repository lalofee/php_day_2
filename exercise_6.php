<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>insert data in table</title>
</head>

<body>
	
<?php
//Insert data into MySQL table using PHP and MySQL.


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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>

</body>
</html>

