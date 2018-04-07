<?php include('layouts/header.php');?>

	
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center" style="margin:10px 0px ">
			<h2>Dashboard</h2>
		</div>
		
		
		<div class="col-md-12" style="margin:10px 0px ">
			<a class = "btn btn-primary" href="<?php echo base_url()."index.php/dashboard/addUser"?>">Add User</a>
		</div>
		<div class="col-md-12">
		
	<?php

		if($this->session->flashdata('successMsg'))
		{
			echo '<div class="alert alert-success">';
			echo $this->session->flashdata('successMsg');
			echo '</div>';
		}
		
		if($this->session->flashdata('errorMsg'))
		{
			echo '<div class="alert alert-info">';
			echo $this->session->flashdata('errorMsg');
			echo '</div>';
		}
		
				
		if(!empty($getUsers))
		{
			echo '<table class="table">';
			echo '<tr>';
			echo '<th>First Name</th>';
			echo '<th>Last Name</th>';
			echo '<th>Email</th>';
			echo '<th>Action</th>';
			echo '</tr>';
			
			foreach($getUsers as $user)
			{
					echo '<tr>';
					echo "<td>".$user['first_name']."</td>";
					echo "<td>".$user['last_name']."</td>";
					echo "<td>".$user['email']."</td>";
					echo '<td><a href="'.base_url().'index.php/dashboard/view/'.$user["id"].'" class="btn btn-primary">View</a> <a class = "btn btn-primary" href="'.base_url().'index.php/dashboard/editUser/'.$user["id"].'">Edit</a> <a class = "btn btn-primary" href="'.base_url().'index.php/dashboard/deleteUser/'.$user["id"].'">Delete</a></td>';
					echo '</tr>';
			}
			
			echo '</table>';
		}
	?>
	</div>
	</div>
	</div>


<?php include('layouts/footer.php');?>	