<?php 
/**
 * Shubham Sahu
 */
class Managers extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
    }
    public function index()
    {
    	$this->load->view('manager/index');
    }

}
