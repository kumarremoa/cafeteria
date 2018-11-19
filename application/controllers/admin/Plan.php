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
		if(!$this->session->userdata('admin_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
	}
	
	public function index()
	{		
		$data['prices']=$this->db->get('subplans_pricing')->result();
		$this->load->view('admin/plan/index',$data);
	}
	public function add()
	{		
		$this->load->view('admin/plan/add');
	}
	public function save()
	{		
		$data=array(
			'Engine_Classification'=>$this->input->post('Engine_Classification'),
			'Plan_Name'=>$this->input->post('Plan_Name'),
			'No_of_Services'=>$this->input->post('No_of_Services'),
			'Breakdown_Assist'=>$this->input->post('Breakdown_Assist'),
			'Duration_Years'=>$this->input->post('Duration_Years'),
			'Discount'=>$this->input->post('Discount'),
			'Price'=>$this->input->post('Price'),
		);
		$this->db->insert('subplans_pricing',$data);
		$this->session->set_flashdata('message','Plan Added Successfull.');
		redirect(base_url('admin/plan'));
	}
	public function update()
	{	
		$id=$this->input->post('Plan_ID');
		$data=array(
			'Engine_Classification'=>$this->input->post('Engine_Classification'),
			'Plan_Name'=>$this->input->post('Plan_Name'),
			'No_of_Services'=>$this->input->post('No_of_Services'),
			'Breakdown_Assist'=>$this->input->post('Breakdown_Assist'),
			'Duration_Years'=>$this->input->post('Duration_Years'),
			'Discount'=>$this->input->post('Discount'),
			'Price'=>$this->input->post('Price'),
		);
		$this->db->where('Plan_ID',$id);
		$this->db->update('subplans_pricing',$data);
		$this->session->set_flashdata('message','Plan Update Successfull.');
		redirect(base_url('admin/plan'));
	}
	public function edit($id)
	{	$this->db->where('Plan_ID',$id);
		$data['prices']=$this->db->get('subplans_pricing')->result();
		$this->load->view('admin/plan/edit',$data);
	}
	public function view($id)
	{
		$this->db->where('Plan_ID',$id);
		$data['users']=$this->db->get('subplans_pricing')->result();
		$this->load->view('admin/plan/view',$data);
	}
	public function delete($id)
	{
		$this->db->where('Plan_ID',$id);
		$this->db->delete('subplans_pricing');
		$this->session->set_flashdata('message','Plan Delete Successfull.');
		redirect(base_url('admin/plan'));
	}
}
