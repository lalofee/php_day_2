<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>insert data in table</title>
</head>

<body>
	
<?php
//Insert data into MySQL table using PHP and MySQL.
echo ("<html><body>");

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

// Escape user inputs for security

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);

$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

$email = mysqli_real_escape_string($conn, $_POST['email']);


// attempt insert query execution

$sql = "INSERT INTO myguests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";



if (mysqli_query($conn, $sql)) {

    echo "<h1>New record created.<h1>";

} else {

    echo "<h1>Record creation error for: </h1>" . 

          "<p>" . $sql . "</p>" . 

          mysqli_error($conn);

}


mysqli_close($conn);



echo "</body></html>";


?>

</body>
</html>
