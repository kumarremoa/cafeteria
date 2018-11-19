<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */
class ProductCat extends CI_Model
{
    public function __construct()
    {
		parent::__construct();
		$this->load->database();        
    }
    public function cat_list()
    {
    	return $this->db->get('product_cat')->result();
    }
    public function cat_edit($value)
    {
    	return $this->db->get_where('product_cat',array('cat_id'=>$value))->result();
    }
    public function insert_data($value)
    {
    	return $this->db->Insert('product_cat',$value);
    }
    
    public function cat_delete($id)
    {
    	$this->db->where('cat_id',$id);
        return $this->db->delete('product_cat');
    }
    public function update_data($id,$data)
    {
    	$this->db->where('cat_id',$id);
        return $this->db->update('product_cat',$data);
    }



    /*Sub Category model*/
    public function sub_cat_list()
    {
        return $this->db->get('prod_sub_cat')->result();
    }
    public function insert_subdata($value)
    {
        return $this->db->Insert('prod_sub_cat',$value);
    }
    public function sub_cat_delete($id)
    {
        $this->db->where('sub_cat_id',$id);
        return $this->db->delete('prod_sub_cat');
    }
    public function sub_cat_edit($id)
    {
        return $this->db->get_where('prod_sub_cat',array('sub_cat_id'=>$id))->result();
    }
    public function sub_update_data($id,$data)
    {
        $this->db->where('sub_cat_id',$id);
        return $this->db->update('prod_sub_cat',$data);
    }
}