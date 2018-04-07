<?php include('layouts/header.php');?>	
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2>Add User</h2>
			
		</div>
		<div class="col-md-5 col-md-offset-6 text-center">
			<a class = "btn btn-primary" href="<?php echo base_url()."index.php/dashboard"?>">Back</a>
		</div
	</div>
	
	<div class="row">
		
		
		<div class="col-md-12" style="margin:10px 0px ">
			
		
			<?php 
				echo validation_errors(); 
				
				if($this->session->flashdata('successMsg'))
				{
					echo '<div class="col-md-6 col-md-offset-3"><div class="alert alert-success">';
					echo $this->session->flashdata('successMsg');
					echo '</div></div>';
				}
				
				if(isset($errorMsg))
				{
					echo '<div class="col-md-6 col-md-offset-3"><div class="alert alert-danger">';
					echo $errorMsg;
					echo '</div></div>';
					unset($errorMsg);
				}
			?>
			
			<form action="<?php echo base_url()."index.php/dashboard/addUser"?>" method="post">
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="name">First Name</label>
					<div class="col-sm-5">
					  <input type="text" name="first_name" class="form-control" value="<?php echo set_value('first_name'); ?>" placeholder="Enter First name" id="fname">
					</div>
				</div>
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="name">Last Name</label>
					<div class="col-sm-5">
					  <input type="text" name="last_name" class="form-control" value="<?php echo set_value('last_name'); ?>" placeholder="Enter Last name" id="lname">
					</div>
				</div>
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="email">Email</label>
					<div class="col-sm-5">
					  <input type="email" name="email" class="form-control" value="<?php echo set_value('email');?>" placeholder="Enter email" id="email">
					</div>
				</div>
				
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="password">Password</label>
					<div class="col-sm-5">
					  <input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>" placeholder="Enter password" id="password">
					</div>
				</div>
				
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="phone">Phone</label>
					<div class="col-sm-5">
					  <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone');?>" placeholder="Enter phone" id="phone">
					</div>
				</div>
				
				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right"></label>
					<div class="col-sm-5">
					  <button class="btn btn-primary" type="submit"> Submit</button>
					</div>
				</div>
				
				
			</form>
		</div>
	</div>
</div>

<?php include('layouts/footer.php');?>