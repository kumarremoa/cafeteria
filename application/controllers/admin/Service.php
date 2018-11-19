<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller 
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
		$data['brands']=$this->db->get('service_table')->result();
		$this->load->view('admin/service/index',$data);
	}
	public function edit($id)
	{
		$this->db->where('SN',$id);
		$data['brand']=$this->db->get('service_table')->result();
		$this->load->view('admin/service/edit',$data);
	}
	public function save()
	{
		$data=array(
			'Service_ID'=>$this->input->post('Service_ID'),
			'Service_Name'=>$this->input->post('Service_Name'),
		);
		$this->db->insert('service_table',$data);
		$this->session->set_flashdata('message','Service Added Successfull.');
		redirect(base_url('admin/service'));
	}
	public function update()
	{
		$id=$this->input->post('SN');
		$data=array(
			'Service_ID'=>$this->input->post('Service_ID'),
			'Service_Name'=>$this->input->post('Service_Name'),
		);
		$this->db->where('SN',$id);
		$this->db->update('service_table',$data);
		$this->session->set_flashdata('message','Service Added Successfull.');
		redirect(base_url('admin/service'));
	}
	public function add()
	{
		$this->load->view('admin/service/add');
	}
	public function delete($id)
	{
		$this->db->where('SN',$id);
		$this->db->delete('service_table');
		$this->session->set_flashdata('message','Service Delete Successfull.');
		redirect(base_url('admin/users'));
	}
}
