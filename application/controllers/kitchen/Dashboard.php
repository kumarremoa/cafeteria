<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Shubham Sahu
 */

class Dashboard extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url','form');
        if(!$this->session->userdata('kitchen_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
    }
    public function index()
    {
    	$this->load->view('kitchen/index');
    }
}