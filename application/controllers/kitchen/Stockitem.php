<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */
class Stockitem extends CI_Controller
{
    public function __construct()
    {
 		parent::__construct();
 		$this->load->helper('form','url');
 		$this->load->model('Stock_model');
 		$this->load->library('session');
 		if(!$this->session->userdata('kitchen_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }    
    }
    /*Category Item*/
    public function index()
    {
    	$data['listing']=$this->Stock_model->listing();
    	$this->load->view('kitchen/stock/index',$data);
    }
    public function add_category()
    {
    	$this->load->view('kitchen/stock/add');
    }
     public function add_cat_edit($id)
    {
    	$val['data']=$this->Stock_model->edit_cat($id);
    	$this->load->view('kitchen/stock/edit',$val);
    }
    public function save_cat()
    {
    	$name = [
    	    'stoke_cat_name' => $this->input->post('stoke_cat_name'),
    	    'stock_cat_url' => str_replace(' ','-',strtolower($this->input->post('stoke_cat_name'))),
    	];
    	$this->Stock_model->add_cat($name);
    	redirect('kitchen/stockitem','refresh');
    }
    public function cat_update($id)
    {
    	$name = [
    	    'stoke_cat_name' => $this->input->post('stoke_cat_name'),
    	    'stock_cat_url' => str_replace(' ','-',strtolower($this->input->post('stoke_cat_name'))),
    	];
    	$this->Stock_model->update_cat($id,$name);
    	redirect('kitchen/stockitem','refresh');
    }
    public function del_cat($id)
    {
    	$this->Stock_model->delete_cat($id);
    	redirect('kitchen/stockitem','refresh');
    }
    /*stock create*/
    public function stock()
    {
    	$data['listing']=$this->Stock_model->stocklist();
    	$this->load->view('kitchen/stock/stock-list',$data);
    }
    public function addStock()
    {
    	$data['listing']=$this->Stock_model->listing();
    	$this->load->view('kitchen/stock/add-stock',$data);
    }
    public function stockRecord()
    {
    	$name = [
    	    'stock_cat' => $this->input->post('stock_cat'),
    	    'stock_name' => $this->input->post('stock_name'),
    	    'stock_url' => str_replace(' ','-',$this->input->post('stock_name')),
    	    'stock_price' => $this->input->post('stock_price'),
    	    'stock_quantity' => $this->input->post('stock_quantity'),
    	    'stock_total' => $this->input->post('stock_total'),
    	];
    	$data['listing']=$this->Stock_model->stocksave($name);
    	redirect('kitchen/stockitem/stock','refresh');
    }
    public function stockEdit($name)
    {
    	$data['listing']=$this->Stock_model->editStock($name);
    	$this->load->view('kitchen/stock/stock-edit',$data);
    }
    public function stockUpdate($id)
    {
    	$name = [
    	    'stock_cat' => $this->input->post('stock_cat'),
    	    'stock_name' => $this->input->post('stock_name'),
    	    'stock_url' => str_replace(' ','-',$this->input->post('stock_name')),
    	    'stock_price' => $this->input->post('stock_price'),
    	    'stock_quantity' => $this->input->post('stock_quantity'),
    	    'stock_total' => $this->input->post('stock_total'),
    	];
    	$this->Stock_model->updateStock($id,$name);
    	redirect('kitchen/stockitem/stock','refresh');
    }
    public function stockDelete($id)
    {
    	$this->Stock_model->deleteStock($id);
    	redirect('kitchen/stockitem/stock','refresh');
    }
}