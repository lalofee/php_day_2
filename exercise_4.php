<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>create database</title>
</head>

<body>
	
<?php
//Create Database using PHP and MySQL.

//connect to mysql
$servername = "localhost";
	$user = "root";
	$pw = "";
	$dbname = "myDB";

	$con = new mysqli($servername, $user, $pw);

	if($con ->connect_error) {
		die("alles kaputt".$con ->connect_error);
	}
// Create database
$sql = "CREATE DATABASE myDB";
if ($con->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $con->error;
}

$con->close();




?>

</body>
</html>

