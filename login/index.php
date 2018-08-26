	<?php 
	require_once('dbConnection.php');

	if(isset($_POST['txtUserNameEmail']))
	{
		$username=$_POST['txtUserNameEmail'];
		$password=$_POST['txtPassword'];
		$query="select username,password from user where username ='$username' and password= '$password' ";
		$dataSet=mysqli_query($connection,$query);
		$row=mysqli_fetch_array($dataSet);
		if($row['username']==$username && $row['password'] ==$password)
		{	
			//cookie setting cookie_name,value,expire,path
			setcookie('userExpiration','$password',time()+(5),'/');
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
		
			header('Location:landing-page.php');
		}
		else
		{
			echo"Error login";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!--body login form starting-->
	
		<form method="post" action="#">
			
				
		
				
					<h2 class="display-3 text-info">Login</h2>
				
				
			
					<input type="text" name="txtUserNameEmail" placeholder="Username / Email" id="txtUserNameEmail"required>
				
			
			
					<input type="password" placeholder="Password" name="txtPassword" id="txtPassword">
					
					<input type="submit" name="btnSubmit" value="login">
				
				
			
		</form><br><br>

	<!-- loging form finish-->

</body>
</html>
