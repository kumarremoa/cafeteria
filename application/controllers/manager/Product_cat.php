<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */
class Product_cat extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form','url');
        $this->load->model('ProductCat');
        if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
    }
    public function index()
    {
        $data['catlist']=$this->ProductCat->cat_list();
    	$this->load->view('manager/product-cat/category-list',$data);
    }
    public function add()
    {
    	$this->load->view('manager/product-cat/category-add');
    }
    public function save()
    {
        $name = [
            'prod_cat_name' => $this->input->post('prod_cat_name'),
            'slug' =>$this->input->post('slug_url'),
            'tag' =>$this->input->post('tag'),
        ];
        $this->ProductCat->insert_data($name);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                      <strong>Success!</strong> Data save successful</div>');
        redirect('manager/product_cat','refresh');
    }
    public function edit($id)
    {
        $data['catlist']=$this->ProductCat->cat_edit($id);
        $this->load->view('manager/product-cat/category-edit-cat',$data);
    }
    public function cat_del($value)
    {
        $this->ProductCat->cat_delete($value);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                      <strong>Success!</strong> Category Delete successful</div>');
        redirect('manager/product_cat','refresh');  
    }
    public function update($id)
    {
        $name = [
            'prod_cat_name' => $this->input->post('prod_cat_name'),
            'slug' =>$this->input->post('slug_url'),
            'tag' =>$this->input->post('tag'),
        ];
        $this->ProductCat->update_data($id,$name);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                      <strong>Success!</strong> Data update successful</div>');
        redirect('manager/product_cat','refresh');
    }



    /*Sub category*/
    public function product_sub_cat()
    {
        $data['catlist']=$this->ProductCat->sub_cat_list();
        $this->load->view('manager/product-subcat/category-list',$data);
    }
    public function sub_add()
    {
        $data['catlist']=$this->ProductCat->cat_list();
        $this->load->view('manager/product-subcat/product-cat',$data);
    }
    public function sub_save()
    {
        $name = [
            'prod_category' => $this->input->post('category'),
            'sub_cat_name' => $this->input->post('subcategory'),
            'sub_cat_slug' =>$this->input->post('slug'),
            'sub_cat_tag' =>$this->input->post('tag'),
        ];
        $this->ProductCat->insert_subdata($name);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                      <strong>Success!</strong> Record add successful</div>');
        redirect('manager/product_cat/product_sub_cat','refresh');
    }
    public function sub_edit($id)
    {
        $data['catlist']=$this->ProductCat->sub_cat_edit($id);
        $data['catlists']=$this->ProductCat->cat_list();
        $this->load->view('manager/product-subcat/product-edit-cat',$data);
    }
    
    public function sub_update($id)
    {
        $name = [
            'prod_category' => $this->input->post('prod_category'),
            'sub_cat_name' => $this->input->post('sub_cat_name'),
            'sub_cat_slug' =>$this->input->post('sub_cat_slug'),
            'sub_cat_tag' =>$this->input->post('sub_cat_tag'),
        ];
        $this->ProductCat->sub_update_data($id,$name);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                      <strong>Success!</strong> Data update successful</div>');
        redirect('manager/product_cat/product_sub_cat','refresh');
    }
    public function sub_cat_del($id)
    {
        $this->ProductCat->sub_cat_delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                      <strong>Success!</strong> Data delete successful</div>');
        redirect('manager/product_cat/product_sub_cat','refresh');
    }
}