<?php
/**
 * Shubham Sahu
 */
class Restaurant extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Restaurant_model');
        $this->load->model('Waiter_model');
        if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
    }
    public function index()	
    {
    	$data['listing']=$this->Restaurant_model->listing();
    	$this->load->view('manager/restaurant/index',$data);
    }
    public function filter($name)
    {
    	$data['listing']=$this->Restaurant_model->filter($name);
    	$this->load->view('manager/restaurant/index',$data);
    }
    public function add_seat()
    {	
    	$this->load->view('manager/restaurant/add');
    }
    public function save()
    {
    	
    	$name = [
    	    'Service_ID' => $this->input->post('side').'-'.$this->input->post('Service_ID'),
    	    'res_table_seat'=>$this->input->post('total_seat'),
    	    'res_seat'=>$this->input->post('res_seat'),
    	];
    	$data=$this->Restaurant_model->save($name);
    	if($data==1){
    		$this->session->set_flashdata('success', 'New Table Added');
    		redirect('manager/restaurant','refresh');
    	}
    	else {
    		$this->session->set_flashdata('error', 'New Table Is Not Added');
    		redirect('manager/restaurant','refresh');
    	}
    }
    public function delete($id)
    {
    	$this->Restaurant_model->delete($id);
    	$this->session->set_flashdata('success', 'Table Deleted');
        redirect('manager/restaurant','refresh');
    }
    public function booking($id)
    {
    	$data['waiter']=$this->Waiter_model->listing();
    	$data['values']=$this->Restaurant_model->selectId($id);
    	$this->load->view('manager/restaurant/booking',$data);
    }
    public function booking_seat()
    {	
    	$name = [
    	    'Service_ID' => $this->input->post('Service_ID'),
    	    'res_table_seat' => $this->input->post('total_seat'),
    	    'res_seat' => $this->input->post('res_seat'),
    	    'res_date_and_time' => $this->input->post('res_date_and_time'),
    	    'user_name' => $this->input->post('user_name'),	
    	    'order_close' => '1',
    	    'waiter_service' => $this->input->post('waiter_service'),
    	    'status' => '1',
    	];
    	
    	$id=$this->input->post('res_id');
    	$this->Restaurant_model->booking_seat($id,$name);
    	redirect('manager/restaurant','refresh');
    }
}