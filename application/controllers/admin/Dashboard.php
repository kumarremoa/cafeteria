<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->database();
		$this->load->library('session');
		if(!$this->session->userdata('admin_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
	}
	
	public function index()
	{		
		 $this->load->view('admin/dashboard');
		
	}
	
	public function change()
	{
		$id=$this->input->post('id');
		$data=array(
			'password'=>$this->input->post('password'),
		);
		$this->db->where('id',$id);
		$this->db->Update('admin',$data);
		$this->session->set_flashdata('message','Updated Successfull.');
		redirect(base_url('admin/dashboard'));
	}
}
