
<!DOCTYPE html>
<html>
<head>
	<title>guest-book</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
<center><form action="contoller.php" method="post">
	<label><h1>Comment</h1></label><br>
	<textarea rows="4" cols="60" name="txtComment"></textarea><br>
	<button type="submit">Comment</button>
</form></center>
<!--comments -->
<div class="comments">
	<h2>recent comments</h2><br><br>
		<!--comments goes here -->
		<?php 
					require_once('connection.php');
					
					$query= "select * from comments order by id desc limit 10";
					$dataSet=mysqli_query($connection,$query);
					//$time=1.0;
					while($row=mysqli_fetch_assoc($dataSet)):
						
		?>
	<hr><br>
<?php echo"".$row['comment'].""; ?>
<hr><br>
<?php endwhile; ?>
</div>
</body>
</html></form>