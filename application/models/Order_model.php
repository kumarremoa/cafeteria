<?php
/**
 * Shubham Sahu
 */
class Order_model extends CI_Model
{
    
    public function __construct()
    {
    	parent::__construct();   
    	$this->load->database(); 
    }
    public function listing()
    {
    	return $this->db->get('order')->result();
    }
     public function orderdetails($table,$price,$menu,$disprice,$quantity,$total,$tot_qua)
    {
    	 $sql="INSERT INTO `order`(`order_menu`, `order_quantity`, `order_table`,`menu_price`, `dis_price`, `total_price`,`tot_qua`) VALUES ('$menu','$quantity','$table','$price','$disprice','$total','$tot_qua')"; 
    	 return $this->db->query($sql);
    }
    public function orderShow($id)
    {
        return $this->db->get_where('order',array('order_id'=>$id))->result();
    }
}