<?php
/**
 * Shubham Sahu
 */
class Waiter extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Waiter_model');
        if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
    }
    public function index()	
    {
    	$data['listing']=$this->Waiter_model->listing();
    	$this->load->view('manager/waiter/index',$data);
    }
    public function edit($id)
    {
        $data['listing']=$this->Waiter_model->selectId($id);
        $this->load->view('manager/waiter/edit',$data);
    }
    public function update()
    {
        $name = [
             'waiter_name' =>$this->input->post('waiter_name'),
             'waiter_id' =>$this->input->post('waiter_id'),
        ];
        $id= $this->input->post('id');
        $this->Waiter_model->update($id,$waiter_name);
        redirect('manager/waiter','refresh');
    }
    public function delete($id)
    {
        $data['listing']=$this->Waiter_model->delete($id);
        redirect('manager/waiter','refresh');
    }
    public function save()
    {
        $name = [
             'waiter_name' =>$this->input->post('waiter_name'),
             'waiter_id' =>$this->input->post('waiter_id'),
        ];
        
        $this->Waiter_model->save($name);
        redirect('manager/waiter','refresh');
    }
    public function addWaiter()
    {
         $this->load->view('manager/waiter/add');
    }
   
}