<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */
class Popular extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form','url');
        $this->load->model('Popular_model');
        if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
    }
    public function index()
    {
    	$data['brands']=$this->Popular_model->listing();
    	$this->load->view('manager/populer/index', $data);
    }
    public function add()
    {
    	$this->load->view('manager/populer/add');
    }
    public function save()
    {
        $name = [
            'populer_brand_name' => $this->input->post('populer_brand_name'),
            'populer_brand_slug' =>$this->input->post('populer_brand_slug'),
            'populer_brand_tag' =>$this->input->post('populer_brand_tag'),
        ];

        $this->Popular_model->insert_data($name);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                      <strong>Success!</strong> Data save successful</div>');
        redirect('manager/popular','refresh');
    }
    public function edit($id)
    {
        $data['catlist']=$this->Popular_model->brand_edit($id);
        $this->load->view('manager/populer/edit',$data);
    }
    public function delete($value)
    {
        $this->Popular_model->deletebrand($value);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">
                                      <strong>Success!</strong> Category Delete successful</div>');
        redirect('manager/popular','refresh');  
    }
    public function update($id)
    {
        $name = [
            'populer_brand_name' => $this->input->post('populer_brand_name'),
            'populer_brand_slug' =>$this->input->post('populer_brand_slug'),
            'populer_brand_tag' =>$this->input->post('populer_brand_tag'),
        ];

        $this->Popular_model->update_data($id,$name);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                                      <strong>Success!</strong> Data save successful</div>');
        redirect('manager/popular','refresh');
    }

}