<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Order_model');
		$this->load->model('Category_model');
		$this->load->model('Brand_model');
		$this->load->library('session');
		if(!$this->session->userdata('manager_in')==true)
	    {
	      redirect(base_url().'admin/login/logout');
	    }
	}
	
	public function index()
	{		
		$data['order']=$this->Order_model->listing();
		$this->load->view('manager/order/index',$data);
	}
	public function add()
	{		
		$data['menuCats']=$this->Category_model->listing();
		$data['subMenuCat']=$this->Brand_model->listing();
		$this->load->view('manager/order/add',$data);
	}
	public function selectItem($id)
	{
		$data=$this->Brand_model->selectId($id);
		echo json_encode($data);
	}
	public function orderRecords()
	{
		
		$tot_qua=implode(',',$this->input->post('tot_qua'));
		$table=$this->input->post('table');
		$prices=implode(',',$this->input->post('price'));
		$menu=implode(',',$this->input->post('menu'));
		$disprice=implode(',',$this->input->post('disprice'));
		$quantity=implode(',',$this->input->post('quantity'));
		$a= $this->input->post('disprice');
		$b= $this->input->post('quantity');
		$total = array();
		foreach($a as $key => $price){
		    $total[$key] = $price * $b[$key];
		}
		$total=array_sum($total);
		$this->Order_model->orderdetails($table,$prices,$menu,$disprice,$quantity,$total,$tot_qua);
		redirect(base_url().'manager/order','refresh');
	}
	public function delete($id)
	{
		$this->db->where('order_id',$id);
		$this->db->delete('order');
		redirect(base_url().'manager/order','refresh');
	}
	public function orderDetails($id)
	{
		$data['records']=$this->Order_model->orderShow($id);
		$this->load->view('manager/order/details', $data, FALSE);
	}
	
}
