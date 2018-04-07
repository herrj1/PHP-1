<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class user_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function checkDuplicate($email)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->like('email', $email);
		return $this->db->count_all_results();
	}
	
	function insertUser($data)
	{
		if($this->db->insert('users', $data))
		{
			return  $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}
	
	
	function updateUser($data,$id)
	{
		if($this->db->update('users', $data, 'id = '.$id))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function deleteUser($id)
	{
		if($this->db->delete('users', array('id' => $id)))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
	function userExist($email)
	{
		$this->db->select('*');
		$this->db->like('email', $email);
		$qry = $this->db->get('users');
		$rs = $qry->result_array();
		return $rs[0];
	}
	
	
	function getAllUsers()
	{
		$this->db->select('*');
		$qry = $this->db->get('users');
		$rs = $qry->result_array();
		
		return $rs;
	}
	
	function getUserByID($id)
	{
		$this->db->select('*');
		$this->db->like('id', $id);
		$qry = $this->db->get('users');
		$rs = $qry->result_array();
		return $rs[0];
	}
	
}	