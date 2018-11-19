<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
*
*Author:Shubham Sahu
*
*/
class Cart extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session','cart');
		$this->load->helper('form','url');
		$this->load->model('Product_model');
		$cat_lists=$this->Product_model->listingcount(); 
	}
	public function index()
	{	
		$optionss=$this->input->post('product_id');
		$SizeAndPrice=$this->input->post('product_size');
		$var = explode(',', $SizeAndPrice);
		$size=$var[0];
		$price=$var[1];
		$value=$this->Product_model->product_id($optionss);
		$rand='sku_po'.rand(9999,1234);
		$data=array(
			'id'=>$rand,
			'qty'=>1,
			'product_id'=>$optionss,
			'price'=>$price,
			'name'=>$value[0]->product_name,
			'options'=> $size,
		);
		$show=$this->cart->insert($data);	
	}
	function remove($rowid)
	{
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		$this->session->unset_userdata('voucher_code');
		$this->session->unset_userdata('voucher_discount');
		$this->session->unset_userdata('voucher_status');	
		redirect('cart');
	}	

	function update_cart()
	{
		
		$row_ids = $this->input->get_post('row_id');
		$qty = $this->input->get_post('cart_qty');
		$price = $this->input->get_post('price');
		
		for($i=0;$i<count($row_ids);$i++){
			$data = array(
					'rowid'   => $row_ids[$i],
					'qty'     => $qty[$i],
					'price' => $qty[$i]*$price[$i]
			);
	
			$this->cart->update($data);
		}
		
		redirect('cart');
	}	
	public function cart_distroy()
	{
		 $this->cart->destroy();
         redirect(base_url().'product/menu');
	}
	public function cart_list()
	{
		$this->load->view('cart-list');
	}




















	/*load data*/
	public function loadData()
	{
		$i=1; 
		foreach ($total=$this->cart->contents() as $items)
		{
			echo '<tr>
			  <td>'.$items['qty'].'</td>
			  <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a>
				<td>'.$items['name'].'</td>
				<td>'.$items['options'].'</td>
				<td>&#8377;'.$items['price'].'</td>
			</tr>';
	 	}
	}
	public function cartAdd()
	{	
		$optionss=$this->input->post('product_id');
		$value=$this->Product_model->product_id($optionss);
		$rand='sku_po'.rand(9999,1234);
		$data=array(
			'id'=>$rand,
			'qty'=>1,
			'product_id'=>$optionss,
			'price'=>$value[0]->discount_total,
			'name'=>$value[0]->product_name,
			'options'=> full,
		);
		$show=$this->cart->insert($data);	
	}
	public function loadtotal(){
	echo $this->cart->format_number($this->cart->total());
	}
	public function loadvalue(){
	echo count($this->cart->contents());
	}
	
}
 