<?php
session_start();
	if(isset($_POST['bttLogin'])){
		require 'connect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$warning = false;
		$passwordEncrypt = sha1($password);
		$result = mysqli_query($con, 'SELECT * FROM account WHERE username="'.$username.'" and password="'. $passwordEncrypt .'"');
		if(mysqli_num_rows($result)==1){
			$_SESSION['username'] = $username;
			header('Location: welcome.php');
		}else{
			$warning = true;
			echo "<center>Invalid account username or password.</center>";
		}
	
		if(isset($_GET['logout'])){
			session_unregister('username');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form by Fullarray</title>
	<style>
	 form { 
		margin: 0 auto; 
		width:250px;
		}
	</style>
</head>
<body>
	<form method="POST" action="index.php?action=login">
		<table cellpadding="2" cellspacing="2" border="1">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="bttLogin" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
