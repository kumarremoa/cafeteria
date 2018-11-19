<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Brand_model');
		$this->load->database();
		$this->load->library('session');
		if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
	}
	
	public function index()
	{		
		$data['brands']=$this->Brand_model->listing();
		$this->load->view('manager/brand/index',$data);
	}
	public function edit($id)
	{
		$data['menu']=$this->db->get('category_table')->listing();
		$data['brand']=$this->Brand_model->edit($id);
		$this->load->view('manager/brand/edit',$data);
	}
	public function save()
	{
		$data=array(
			'Brand_Name'=>$this->input->post('Brand_Name'),
			'Brand_menu'=>$this->input->post('Brand_menu'),
			'Brand_price'=>$this->input->post('Brand_price'),
			'discount_price'=>$this->input->post('discount_price'),
			'total_price'=>$this->input->post('total_price'),
		);
		$this->Brand_model->savedata($data);
		$this->session->set_flashdata('message','Brand Added Successfull.');
		redirect(base_url('manager/brand'));
	}
	public function update()
	{
		$id=$this->input->post('SN');
		$data=array(	
			'Brand_Name'=>$this->input->post('Brand_Name'),
			'Brand_menu'=>$this->input->post('Brand_menu'),
			'Brand_price'=>$this->input->post('Brand_price'),
			'discount_price'=>$this->input->post('discount_price'),
			'total_price'=>$this->input->post('total_price'),
		);
		$this->Brand_model->update($id,$data);
		$this->session->set_flashdata('message','Brand Added Successfull.');
		redirect(base_url('manager/brand'));
	}
	public function add()
	{
		$data['menu']=$this->db->get('category_table')->result();
		$this->load->view('manager/brand/add',$data);
	}
	public function delete($id)
	{
		$this->db->where('SN',$id);
		$this->db->delete('brand_table');
		$this->session->set_flashdata('message','User Delete Successfull.');
		redirect(base_url('manager/brand'));
	}
}
