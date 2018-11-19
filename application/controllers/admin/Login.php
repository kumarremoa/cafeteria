<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Admin_model');
		$this->load->database();
		$this->load->library('session');
		

	}
	
	public function index()
	{		
		 $this->load->view('admin/index');
		
	}
	public function admin_login()
	{
		$role = $this->input->post('role');
		$admin_name = $this->input->post('admin_name');
		$password = md5($this->input->post('password'));
		
	    if($role=='admin'){
	   	   $checking = $this->Admin_model->login_user($admin_name,$password);
			if($checking) 
			{
					$data1 = array(
	                'id' => $checking['id'],
	                'admin_name' => $checking['admin_name'],
	                'username' => $checking['username'],
	                'admin_in'=>true,
	               );
					$this->session->set_userdata($data1);
					redirect(base_url().'admin/dashboard');				
			}
			else{
				redirect(base_url().'admin/login');
			}
		} else if($role=='manager'){
			$checking = $this->Admin_model->login_user($admin_name,$password);
			   
			if($checking) 
			{
					$data1 = array(
	                'id' => $checking['id'],
	                'admin_name' => $checking['admin_name'],
	                'username' => $checking['username'],
	                'manager_in'=>true,
	               );
					$this->session->set_userdata($data1);
					redirect(base_url().'managers');				
			}
			else{
				redirect(base_url().'admin/login');
			}
		} else if($role=='kitchen'){
			$checking = $this->Admin_model->login_user($admin_name,$password);
			if($checking) 
			{
					$data1 = array(
	                'id' => $checking['id'],
	                'admin_name' => $checking['admin_name'],
	                'username' => $checking['username'],
	                'kitchen_in'=>true,
	               );
					$this->session->set_userdata($data1);
					redirect(base_url().'kitchen/dashboard');				
			}
			else{
				redirect(base_url().'admin/login');
			}
		} else {

			redirect(base_url().'admin/login');
	
		}
	}
	public function forgetpassword()
	{
		$this->load->view('forget-password');
	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'admin/login');
	}

}
