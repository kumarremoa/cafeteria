<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Checkout extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
        if (!$this->session->userdata('login_in')==true) {

            redirect('login/logout');

        }
	}
	
	public function index()
	{			
		
		$id = $this->session->userdata('user_id');	
		$this->load->view('', $arr);
	}
	
	public function save_order()
	{
		$customer = array(
			'fld_customer_id' 	    => $this->input->post('fld_customer_id'),
			'fld_customer_name' 	=> $this->input->post('fld_customer_name'),
			'fld_customer_email' 	=> $this->input->post('fld_customer_email'),
			'fld_customer_mobile' 	=> $this->input->post('fld_customer_phone'),
			'fld_customer_address' 	=> $this->input->post('fld_customer_address'),
			'fld_city_name' 		=> $this->input->post('fld_customer_city'),
			'fld_state_name' 		=> $this->input->post('fld_customer_state'),
			'fld_customer_country' 	=> $this->input->post('fld_customer_country'),
			'fld_customer_pincode' 	=> $this->input->post('fld_customer_pincode')
		);		
	
			$ord_id = $this->MBilling->insert_order($order);
			
			if ($cart = $this->cart->contents()):
				foreach ($cart as $item):
					$order_detail = array(
						'fld_order_id' 			=> $ord_id,
						'fld_product_id' 		=> $item['prdid'],
						'ground_type'			=> $item['ground_type'],
						'timeslot'				=> $item['timeslot'],
						'fld_order_quantity' 	=> count(explode(',',$item['timeslot'])),
						'fld_order_price' 		=> $item['price']
					);	
					$cust_id = $this->MBilling->insert_order_detail($order_detail);
				endforeach;
			endif;
			
			if ($cart = $this->cart->contents()):
				foreach ($cart as $item):
					$total+=$item['qty']*$item['price'];
					$fld_product_sku[]=$item['ground_type'];
					$ground_type[]=$item['ground_type'];
					$timeslot[]=$item['timeslot'];
					$fld_product_name[]=$item['name'];
					$fld_order_quantity[]=$item['qty'];
					$fld_order_price[]=$item['price'];
				endforeach;
			endif;
			
			$fld_product_list = array();
				foreach (@$fld_product_sku as $id => $key) {
					$fld_product_list[$id] = array(
						'fld_product_sku'  => $fld_product_sku[$id],
						'ground_type'	   => $ground_type[$id],
						'timeslot'  => $timeslot[$id],
						'fld_product_name' => $fld_product_name[$id],
						'fld_order_quantity' => $fld_order_quantity[$id],
						'order_price' => $fld_order_price[$id]
					);
				}
		  
		if($this->input->post('radio_4')=='1')
		{
		$this->load->helper('url');
		$this->load->library('email');
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$list = array('', '');
		$this->email->initialize($config);
		$this->email->from('noreply@vkbik.in', 'vkbike');
		$this->email->to($this->input->post('fld_customer_email'));
		$this->email->bcc($list);
		$this->email->subject('Your Ground Booking order for Order Id '.$ord_id.' is confirmed');	
		$data1['order_mail_datarecord']=$fld_product_list;
		$data1['order_no']=$ord_id;	
		$data1['ship_address']=$shipping;
		$data1['billing_address']=$customer;
		$data1['customer_name']=$this->input->post('fld_customer_name');
		$data1['payment_mode']='Payable at ground ';
		$email1 = $this->load->view("mod_template/order_confirmation", $data1,true);			
		$this->email->message( $email1 );
		$this->email->send();	
		$this->cart->destroy();
		echo'<meta http-equiv="refresh" content="1;url='.base_url().'thankyou?i='.$ord_id.'">';
		
		}
		if($this->input->post('radio_4')=='5')
		{
			$this->load->helper('atom');
			$processPayment = new ProcessPayment();
			$processPayment->requestMerchant($ord_id);	
		}	
	}
}