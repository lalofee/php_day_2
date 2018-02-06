<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>php verbinde mit datenbank</title>
</head>
<body>

<?php
	$servername = "localhost";
	$user = "root";
	$pw = "";
	$db = "hospital";

	$con = new mysqli($servername, $user, $pw);

	if($con ->connect_error) {
		die("alles kaputt".$con ->connect_error);
	}
	echo "connected";

	
	
?>

</body>
</html>