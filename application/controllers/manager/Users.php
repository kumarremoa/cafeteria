<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->database();
		$this->load->library('session');
		/*if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }*/
	}
	
	public function index()
	{		
		$data['users']=$this->db->get('users')->result();
		$this->load->view('manager/users/index',$data);
	}
	public function view($id)
	{
		$this->db->where('id',$id);
		$data['users']=$this->db->get('users')->result();
		$this->load->view('manager/users/view',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users');
		$this->session->set_flashdata('message','User Delete Successfull.');
		redirect(base_url('manager/users'));
	}
}
