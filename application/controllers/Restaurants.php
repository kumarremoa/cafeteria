<?php
defined('BASEPATH') or exit('No script direct access allowed');
/**
 * shubham Sahu
 */
class Restaurants extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model(array('Product_model','Category_model'));
        $this->load->helper(array('cookie', 'url')); 
        $cat_lists=$this->Product_model->listingcount(); 
        $data['tatal']=$this->Product_model->listingData();
    }
    public function index()
    {
    	$data['tatal']=$this->Product_model->listingData();
    	$data['details']=$this->Product_model->listingData();
		$this->load->view('product-list', $data);
    }
}