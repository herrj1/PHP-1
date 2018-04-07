<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center" style="margin:10px 0px ">
			<h2>View Info</h2>
		</div>
		
		<div class="col-md-12 text-right" style="margin:10px 0px">
			<a class = "btn btn-primary" href="<?php echo base_url()."index.php/dashboard"?>">Back</a>
		</div>
		
		<div class="col-md-12">
	<?php 
		if(!empty($userInfo))
		{
			echo '<table class="table">';
			echo '<tr>';
			echo '<th>First Name</th>';
			echo '<th>Last Name</th>';
			echo '<th>Email</th>';
			echo '<th>Phone</th>';
			echo '<th>Created</th>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>'.$userInfo["first_name"].'</td>';
				echo '<td>'.$userInfo["last_name"].'</td>';
				echo '<td>'.$userInfo["email"].'</td>';
				echo '<td>'.$userInfo["phone"].'</td>';
				echo '<td>'.$userInfo["created"].'</td>';
			echo '</tr>';
			
			
			
			
			echo '</table>';
		}
	?>
	</div>
	</div>
	</div> 
</body>
</html>