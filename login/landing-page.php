<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
</head>
<body>
<a href="logout.php">log out</a>
	<?php
 	if(isset($_SESSION['username']) && isset($_SESSION['password']))
 	{
 		if(isset($_COOKIE['userExpiration']))
 		{

 		}
 		else
 		{
 			session_unset();
 			session_destroy();
 			header('Location:index.php');
 		}
 	}
 	else
 	{
 		header('Location:index.php');
 	}
?>
Dashboard
</body>
</html>