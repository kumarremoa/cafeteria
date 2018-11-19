<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */
class Stock_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
       $this->load->database();
    }
    public function listing()
    {
    	return $this->db->get('stock_cat')->result();
    }
    public function add_cat($value)
    {
    	return $this->db->insert('stock_cat',$value);
    }
    public function edit_cat($value)
    {
    	return $this->db->get_where('stock_cat', array('stock_cat_id'=>$value))->result();
    }
    public function update_cat($id,$name)
    {
    	$this->db->where('stock_cat_id',$id);
    	return $this->db->update('stock_cat',$name);
    }
    public function delete_cat($id)
    {
    	$this->db->where('stock_cat_id',$id);
    	return $this->db->delete('stock_cat');
    }



    /*stock list*/
    public function stocklist()
    {
    	return $this->db->get('stock')->result();
    }
    public function stocksave($save)
    {
    	return $this->db->insert('stock',$save);
    }
    public function editStock($id)
    {
    	return $this->db->get_where('stock', array('stock_id'=>$id))->result();
    }
    public function updateStock($id,$name)
    {
    	$this->db->where('stock_id',$id);
    	return $this->db->update('stock',$name);
    }
    public function deleteStock($id)
    {
    	$this->db->where('stock_id',$id);
    	return $this->db->delete('stock');
    }
}