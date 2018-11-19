<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller 
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
		$data['brands']=$this->db->get('brand_table')->result();
		$this->load->view('admin/brand/index',$data);
	}
	public function edit($id)
	{
		$this->db->where('SN',$id);
		$data['brand']=$this->db->get('brand_table')->result();
		$this->load->view('admin/brand/edit',$data);
	}
	public function save()
	{
		$data=array(
			'Brand_Name'=>$this->input->post('Brand_Name'),
			'Brand_menu'=>$this->input->post('Brand_menu'),
			'Brand_price'=>$this->input->post('Brand_price'),
		);
		$this->db->insert('brand_table',$data);
		$this->session->set_flashdata('message','Brand Added Successfull.');
		redirect(base_url('admin/brand'));
	}
	public function update()
	{
		$id=$this->input->post('SN');
		$data=array(
			'Brand_Name'=>$this->input->post('Brand_Name'),
			'Brand_menu'=>$this->input->post('Brand_menu'),
			'Brand_price'=>$this->input->post('Brand_price'),
		);
		$this->db->where('SN',$id);
		$this->db->update('brand_table',$data);
		$this->session->set_flashdata('message','Brand Added Successfull.');
		redirect(base_url('admin/brand'));
	}
	public function add()
	{
		$data['menu']=$this->db->get('category_table')->result();
		$this->load->view('admin/brand/add',$data);
	}
	public function delete($id)
	{
		$this->db->where('SN',$id);
		$this->db->delete('brand_table');
		$this->session->set_flashdata('message','User Delete Successfull.');
		redirect(base_url('admin/brand'));
	}
}
