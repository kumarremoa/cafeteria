<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller 
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
		$data['prices']=$this->db->get('pricing_table')->result();
		$this->load->view('admin/price/index',$data);
	}
	public function add()
	{		
		$this->load->view('admin/price/add');
	}
	public function edit($id)
	{		
		$this->db->where('SN',$id);
		$data['prices']=$this->db->get('pricing_table')->result();
		$this->load->view('admin/price/edit',$data);
	}
	public function view($id)
	{
		$this->db->where('id',$id);
		$data['pricing_table']=$this->db->get('pricing_table')->result();
		$this->load->view('admin/price/view',$data);
	}
	public function delete($id)
	{
		$this->db->where('SN',$id);
		$this->db->delete('pricing_table');
		$this->session->set_flashdata('message','User Delete Successfull.');
		redirect(base_url('admin/users'));
	}
	public function save()
	{
		$data=array(
			'Service_Name'=>$this->input->post('Service_Name'),
			'Category_Name'=>$this->input->post('Category_Name'),
			'Bikes_Below_150CC'=>$this->input->post('Bikes_Below_150CC'),
			'Scooters_Below_150CC'=>$this->input->post('Scooters_Below_150CC'),
			'Bikes_Btw_150_220CC'=>$this->input->post('Bikes_Btw_150_220CC'),
			'Bikes_Btw_220_500CC'=>$this->input->post('Bikes_Btw_220_500CC'),
		);
		$this->db->insert('pricing_table',$data);
		$this->session->set_flashdata('message','Price Updated Successfull.');
		redirect(base_url('admin/price'));
	}
	public function update()
	{
		$id=$this->input->post('SN');
		$data=array(
			'Service_Name'=>$this->input->post('Service_Name'),
			'Category_Name'=>$this->input->post('Category_Name'),
			'Bikes_Below_150CC'=>$this->input->post('Bikes_Below_150CC'),
			'Scooters_Below_150CC'=>$this->input->post('Scooters_Below_150CC'),
			'Bikes_Btw_150_220CC'=>$this->input->post('Bikes_Btw_150_220CC'),
			'Bikes_Btw_220_500CC'=>$this->input->post('Bikes_Btw_220_500CC'),
		);
		$this->db->where('SN',$id);
		$this->db->Update('pricing_table',$data);
		$this->session->set_flashdata('message','Price Updated Successfull.');
		redirect(base_url('admin/price'));
	}
}
