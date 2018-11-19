<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */

class Product extends CI_Controller
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
    public function country($str)
	{
	     $cookie_name=str_replace('-', ' ',$str);
	      set_cookie('cookie_name',$cookie_name,'3600'); 
	      //get_cookie('cookie_name');
	     $data['tatal']=$this->Product_model->listingData();
	    $data['details']=$this->Product_model->datasearch($cookie_name);
		$this->load->view('product-list', $data);
	}
	public function menu()
	{
		$data['products']=$this->Product_model->listingData();
		$this->load->view('product-menu',$data);
	}
	public function list()
	{
		$data['tatal']=$this->Product_model->listingData();
		$data['products']=$this->Product_model->listingData();
		$this->load->view('list-page',$data);
	}
	public function selectCategory()
	{
		$value=$_REQUEST['product_id'];
		if($value=='all'){
			$details=$this->Product_model->listingData();
		}
		else{
			$details=$this->Product_model->selectCategory($value);
		}
		
		 if(@$details[0]!='')
		 { 
        		foreach($details as $product)
        		{
            	echo '<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                	<a class="strip_list grid" href="javascript:0">
                    	<div class="ribbon_1">Popular</div>
                    	<div class="desc">
							<div class="thumb_strip">
								<img src="'.base_url('products/').$product->product_image.'" alt="">
							</div>
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
							</div>
							<h3>'.$product->product_name.'</h3>
							<div class="type">India '.$product->states.' '.$product->cities.'
							</div>
							<div class="location">'.$product->product_address.'<br>&#8377;<i class="fa fa-times"></i><span class="opening">'.$product->product_price.'</span>&nbsp;
								&#8377;<span>'.$product->discount_total.'</span>
							</div>
							<ul>
								<li>Take away<i class="icon_check_alt2 ok"></i></li>
								<li>Delivery<i class="icon_check_alt2 ok"></i></li>
							</ul>
							<div id="result"></div>
							<button class="btn btn-success" onclick="addToCart(this.value)" value="'.$product->product_id.'">Add cart</button>
							
						</div>
                    </a>
                </div>';
            }
        } else {
            	echo '<h2 align="center"> Product Not Found!</h2>';
           }
		
	}
	public function cart()
	{
		$this->load->view('cartpay');
	}
	public function cartlist()
	{
		$this->load->view('cart-list');
	}
	
	
}