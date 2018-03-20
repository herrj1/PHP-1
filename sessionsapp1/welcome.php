<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form: Fullarray</title>
</head>
<body>
	<div>
		<p>Welcome, <?php echo $_SESSION['username']; ?></p>
		<?php echo '<br/><a href="index.php?action=logout">Logout</a>'; ?>
	</div>
</body>
</html>
