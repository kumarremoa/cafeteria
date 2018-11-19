<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('User_model','ProductCat'));
		$this->load->database();
		$this->load->library('session');
		if(!$this->session->userdata('login_in')==true)
	    {
	      redirect(base_url().'login/logout');
	    }

	}
	
	public function index()
	{
		$id=$this->session->userdata('id');
		$email=$this->session->userdata('email');
		$data['users']=$this->db->get_where('users',array('id'=>$id))->result();
		$data['categories']=$this->ProductCat->cat_list();
		$data['state']=$this->db->query('SELECT DISTINCT city_state FROM cities')->result();
		$data['category']=$this->db->get_where('booking',array('email'=>$email))->result();
		$this->load->view('profile',$data);
	}




	public function changePassword()
	{
		print_r($_REQUEST);
	}
	public function changeEmail()
	{
		print_r($_REQUEST);
	}



















	/*Extra*/
	
	public function city()
	{
		$city=$this->input->post('param');
		$data=$this->db->get_where('cities',array('city_state'=>$city))->result();
		echo '<label>City</label><select class="form-control" name="city_booking" id="city_booking">';
		foreach ($data as $value) {
			echo '<option value="'.$value->city_name.'">'.$value->city_name.'</option>';
		}
		echo "</select>";
	}
	public function category()
	{
		$param=$this->input->post('param');
		$data=$this->db->get_where('prod_sub_cat',array('prod_category'=>$param))->result();
		echo '<label>Sub Category</label><select name="product_sub_cat" id="product_sub_cat" class="form-control" placeholder="EX. Main courses">';
		foreach ($data as $value) {
			echo '<option value="'.$value->sub_cat_name.'">'.$value->sub_cat_name.'</option>';
		}
		echo "</select>";
	}
	
	
}
