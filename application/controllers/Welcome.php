<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('google');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data['google_login_url']=$this->google->get_login_url();
		$this->load->view('index',$data);
	}
	
	public function search()
	{
		$name=str_replace('%20', ' ',$_REQUEST['str_state']);
		$data=$this->Category_model->datasearch($name);
		
		if($data!='')
		{
			echo '<ul class="list-group">';
			foreach($data as $value){
				echo '<li class="list-group-item"><a href="'.base_url('product/country/').str_replace(' ','-',$name).'">'.$value->country." ".$value->city_state." ".$value->city_name.'</a></li>';
			}
			echo '</ul>';
		}
		else{
			echo 'data not found!';
		}
	}
	public function restaurant(){
		$name=$_REQUEST['str_state'];
		$data['tatal']=$this->Product_model->listingData();
	    $data['details']=$this->Product_model->datasearch($name);
	    if($data['details']!=''){
		$this->load->view('product-list', $data);
		}
		else{
		$this->load->view('index');
		}
	}

}
