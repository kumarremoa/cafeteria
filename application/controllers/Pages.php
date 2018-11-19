<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('index');
	}
	public function registration()
	{
		$this->load->view('register');
	}
	public function sponge_bucket()
	{
		$this->load->view('index');
	}
	public function user()
	{
		$this->load->view('index');
	}
	public function ownerShip()
	{
		$this->load->view('index');
	}
	public function plan()
	{
		$this->load->view('index');
	}
	public function help()
	{
		$this->load->view('index');
	}
	public function subscription()
	{
		$data['bike']='Bikes Below 150CC';
		$data['plans']=$this->db->get('classification_categories')->result(); 
		$this->db->limit(3); 
		$data['planing'] = $this->db->get('subplans_pricing')->result();
		//print_r($data['planing']); die();
		$this->load->view('subscription-plan',$data);
	}
	public function pricing()
	{
		$data['table_cat']=$this->db->get('category_table')->result();
		$data['prices']=$this->db->get('pricing_table')->result();
		$this->load->view('pricing',$data);
	}
	public function service()
	{
		$this->load->view('service-request');
	}
	public function plan_extra($value)
	{
		$data['bike']=str_replace('-', ' ', $value);
		 $get=str_replace('-', ' ', $value);
		$data['plans']=$this->db->get('classification_categories')->result();
		$this->db->where('Engine_Classification',$get);
		$data['planing'] = $this->db->query("select * from subplans_pricing where Engine_Classification='$get'")->result();
		//print_r($data['planing']); die();
		$this->load->view('subscription-plan',$data);
	}
	public function term()
	{
		$this->load->view('term');
	}
	
}
