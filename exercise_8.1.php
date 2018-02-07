<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title></title>
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

$sql = "SELECT firstname, lastname, email FROM myguests";
$result = mysqli_query($conn, $sql);
// fetch a next row (as long as there are some) into $row
while($row = mysqli_fetch_assoc($result)) {
        printf("Firstname: %s Lastname: %s email: %s<br>",
                  $row["firstname"], $row["lastname"],$row["email"]);
 }
echo "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);



?>

</body>
</html>







