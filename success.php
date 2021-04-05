<?php  
	require_once("connection.php");
	session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Logged in!</title>
		<style>
			body{
				font-family: arial;
				text-align: center;
				padding: 50px;
			}
			p{
				font-size: 24px;
				
			}
			a{
				padding: 10px 20px;
				text-decoration: none;
				border: 1px solid black;
				color: black;
				
			}
		</style>
	</head>
	<body>
		<p>Hello there <?= $_SESSION['fname']." ".$_SESSION['lname']; ?>!</p>
		<a href="process.php">LOG OUT</a>
	</body>
</html>