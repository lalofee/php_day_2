<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>get user agent</title>
</head>
<body>
	<?php

$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";


 if( preg_match( "/MSIE/i", "$viewer" ) )
{
$browser = "Internet Explorer";

 }

 else if( preg_match( "/Netscape/i", "$viewer" ) )

 {

 $browser = "Netscape";

 }

 elseif(preg_match('/Chrome/i', "$viewer"))

 {

 $browser = 'Google Chrome'; 

 }

 else if( preg_match( "/Mozilla/i", "$viewer" ))

 {

 $browser = "Mozilla";

 }

elseif(preg_match('/Safari/i',"$viewer"))

 {

 $browser = 'Apple Safari';

 }


 $platform = "An unidentified OS!";

 if( preg_match( "/Windows/i", "$viewer" ) )

{

 $platform = "Windows!";

 }

 else if ( preg_match( "/Linux/i", "$viewer" ) )

 {

 $platform = "Linux!";

 }

 else if ( preg_match( "/Mac/i", "$viewer" ) )

 {

 $platform = "Mac!";

 }

 echo("You are using $browser on $platform");


?>
</body>
</html>