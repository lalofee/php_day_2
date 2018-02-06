<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>title</title>
</head>

<body>
	
	<form action="exercise_2.php" method="POST">

 		Name: <input type="text" name="name" />

 		Surname: <input type="text" name="surname" />

 		<input type="submit" name="submit" />

 	</form>

<?php
	
if(isset($_POST['submit']))

{


 if( $_POST["name"] || $_POST["surname"] )

 {
echo "Welcome ". $_POST['name']; 
echo " ". $_POST['surname'];
 }

}


?>


	

<br>


</body>
</html>