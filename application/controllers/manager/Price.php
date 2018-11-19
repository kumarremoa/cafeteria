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
		if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
	}
	
	public function index()
	{		
		$data['prices']=$this->db->get('pricing_table')->result();
		$this->load->view('manager/price/index',$data);
	}
	public function add()
	{		
		$this->load->view('manager/price/add');
	}
	public function edit($id)
	{		
		$this->db->where('SN',$id);
		$data['prices']=$this->db->get('pricing_table')->result();
		$this->load->view('manager/price/edit',$data);
	}
	public function view($id)
	{
		$this->db->where('id',$id);
		$data['pricing_table']=$this->db->get('pricing_table')->result();
		$this->load->view('manager/price/view',$data);
	}
	public function delete($id)
	{
		$this->db->where('SN',$id);
		$this->db->delete('pricing_table');
		$this->session->set_flashdata('message','User Delete Successfull.');
		redirect(base_url('manager/users'));
	}
	
}
