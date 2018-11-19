<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller 
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
		$data['category']=$this->db->get('category_table')->result();
		$this->load->view('admin/category/index',$data);
	}
	public function cat_delete($id)
	{
		$this->db->where('cat_id',$id);
		$this->db->delete('category_table');
		$this->session->set_flashdata('message','Category Delete Successfull.');
		redirect(base_url('admin/category'));
	}
	public function edit_cat($id)
	{
		$this->db->where('cat_id',$id);
		$data['category']=$this->db->get('category_table')->result();
		$this->load->view('admin/category/edit',$data);
	}
	public function add_cat()
	{
		$this->load->view('admin/category/add');
	}
	public function cat_update()
	{
		$id=$this->input->post('cat_id');
		$data=array(
			'Category_ID'=>$this->input->post('Category_ID'),
			'Category_Name'=>$this->input->post('Category_Name'),
		);
		$this->db->where('cat_id',$id);
		$this->db->update('category_table',$data);
		$this->session->set_flashdata('message','Category Updated Successfull.');
		redirect(base_url('admin/category'));
	}
	public function cat_save()
	{
		$data=array(
			'Category_ID'=>$this->input->post('Category_ID'),
			'Category_Name'=>$this->input->post('Category_Name'),
		);
		$this->db->insert('category_table',$data);
		$this->session->set_flashdata('message','Category Updated Successfull.');
		redirect(base_url('admin/category'));
	}









/*classification*/

	public function classification()
	{
		$data['classification_categories']=$this->db->get('classification_categories')->result();
		$this->load->view('admin/classification/index',$data);
	}
	public function edit($id)
	{
		$this->db->where('Classification_ID',$id);
		$data['brand']=$this->db->get('classification_categories')->result();
		$this->load->view('admin/classification/edit',$data);
	}
	public function save()
	{
		$data=array(
			'Classification_ID'=>$this->input->post('Classification_ID'),
			'Engine_Classification'=>$this->input->post('Engine_Classification'),
		);
		$this->db->insert('classification_categories',$data);
		$this->session->set_flashdata('message','Engine_Classification Added Successfull.');
		redirect(base_url('admin/category/classification'));
	}
	public function update()
	{
		$id=$this->input->post('Classification_ID');
		$data=array(
			'Engine_Classification'=>$this->input->post('Engine_Classification'),
			'Classification_ID'=>$this->input->post('Classification_ID'),
		);
		$this->db->where('Classification_ID',$id);
		$this->db->update('classification_categories',$data);
		$this->session->set_flashdata('message','Engine_Classification Updated Successfull.');
		redirect(base_url('admin/category/classification'));
	}
	public function add()
	{
		$this->load->view('admin/classification/add');
	}
	public function delete($id)
	{
		$this->db->where('Classification_ID',$id);
		$this->db->delete('classification_categories');
		$this->session->set_flashdata('message','Engine_Classification Delete Successfull.');
		redirect(base_url('admin/category/classification'));
	}
}