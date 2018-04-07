<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['getUsers'] = $this->user_model->getAllUsers();
		$this->load->view('dashboard', $data);
	}
	
	public function view($id){
		$getUserID = $id;
		$data['userInfo'] = $this->user_model->getUserByID($getUserID);
		$this->load->view('view-info', $data);
	}
	
	public function addUser(){
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		
		$this->form_validation->set_error_delimiters('<div class="col-md-6 col-md-offset-3"><div class="alert alert-danger">', '</div></div>');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('add_user');
		}
		else
		{
			$firstName 	= $this->security->xss_clean($this->input->post('first_name'));
			$lastName 	= $this->security->xss_clean($this->input->post('last_name'));
			$email 		= $this->security->xss_clean($this->input->post('email'));
			$password 	= $this->security->xss_clean($this->input->post('password'));
			$phone 		= $this->security->xss_clean($this->input->post('phone'));
			
			$options = array("cost"=>4);
			$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
 
			
			$insertData = array('first_name'=>$firstName,
								'last_name'=>$lastName,
								'email'=>$email,
								'phone'=>$phone,
								'password'=>$hashPassword);
								
			
			$checkDuplicate = $this->user_model->checkDuplicate($email);
			
			if($checkDuplicate == 0)
			{
				$insertUser = $this->user_model->insertUser($insertData);
			
				if($insertUser)
				{
					$this->session->set_flashdata('successMsg', 'User has been added successfully');
					redirect('dashboard/addUser');
					
					
				}
				else
				{
					$data['errorMsg'] = 'Unable to save user. Please try again';
					$this->load->view('add_user', $data);
				}
			}
			else
			{
				$data['errorMsg'] = 'User email alreary exists';
				
				$this->load->view('add_user', $data);
			}
		}	
		
	}
	
	public function editUser($id){
		$getUserID = $id;
		$data['userInfo'] = $this->user_model->getUserByID($getUserID);
		
		
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		
		$this->form_validation->set_error_delimiters('<div class="col-md-6 col-md-offset-3"><div class="alert alert-danger">', '</div></div>');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('edit_user',$data);
		}
		else
		{
			$firstName 	= $this->security->xss_clean($this->input->post('first_name'));
			$lastName 	= $this->security->xss_clean($this->input->post('last_name'));
			$email 		= $this->security->xss_clean($this->input->post('email'));
			$password 	= $this->security->xss_clean($this->input->post('password'));
			$phone 		= $this->security->xss_clean($this->input->post('phone'));
			
			$options = array("cost"=>4);
			$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
 
			
			$updateData = array('first_name'=>$firstName,
								'last_name'=>$lastName,
								'email'=>$email,
								'phone'=>$phone,
								'password'=>$hashPassword);
								
			
			$update = $this->user_model->updateUser($updateData, $getUserID);
			
			if($update)
			{
				$this->session->set_flashdata('successMsg', 'User has been updated successfully');
				redirect('dashboard/editUser/'.$getUserID);
			}
			else
			{
				$data['errorMsg'] = 'Unable to update user. Please try again';
				$this->load->view('edit_user',$data);
			}
		}	
	}
	
	public function deleteUser(){
		if($this->user_model->deleteUser($id))
		{
			$this->session->set_flashdata('successMsg', 'User has been updated successfully');
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata('errorMsg', 'Unable to delete user');
			redirect('dashboard');
		}
	}
}
