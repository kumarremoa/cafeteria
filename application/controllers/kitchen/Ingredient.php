<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */
class Ingredient extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ingredient_model');
        $this->load->helper('url','form');
        $this->load->library('session');
        if(!$this->session->userdata('kitchen_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
    }
    public function index()
    {
    	$this->Ingredient_model->listing();
    	$this->load->view('kitchen/ingredient', $data, FALSE);
    }
}