<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>title</title>
</head>

<body>
	
<?php

// define variables and set to empty values
$nameErr = $surnameErr = "";
$name = $surname = "";
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    echo "Hallo ". ($_POST["name"]);
    
    }
  }

  if (empty($_POST["surname"])) {
    $surnameErr = "Surname is required";
  } else {
    echo " " . ($_POST["surname"]);
     
    }
  

  
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
Surname:
<input type="text" name="surname">
<span class="error">* <?php echo $surnameErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit"> 


</form>



 




</body>
</html>