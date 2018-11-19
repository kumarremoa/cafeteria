<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->database();
		$this->load->library('session');
		/*if(!$this->session->userdata('login_in')==true)
	    {
	      redirect(base_url().'login/logout');
	    }*/

	}
	
	
	
	public function plan_service()
	{ 
		$name=strtolower($this->input->post('name'));
		$data=$this->db->get_where('brand_table',array('Brand_menu'=> $name))->result();

		foreach($data as $key)
		{
		     echo "<input type='checkbox' data-id='".$key->Brand_menu."' onClick='ShowModal(this)' name='set_up[]' value='".$key->Brand_menu."'>".$key->Brand_menu."<br><br>";
		}
		


	}
	
}
