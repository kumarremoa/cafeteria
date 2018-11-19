<?php
defined('BASEPATH')or exit('No direct script access allowed');
/**
 * Author: Shubham Sahu
 * 
 */
class Product_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();

    }
    public function listing()
    {
    	return $this->db->get('products')->result();
    }
    public function selectList($value)
    {
    	return $this->db->get_where('prod_sub_cat',array('prod_category'=>$value))->result();
    }
    public function save_product($value)
    {
        return $this->db->insert('products',$value);
    }
    public function edit_product($id)
    {
        return $this->db->get_where('products',array('product_id'=>$id))->result();
    }
    public function update_product($id,$data)
    {
        return $this->db->update('products',$data,array('product_id'=>$id));
    }
    public function delete_product($id)
    {
        $this->db->where('product_id',$id);
        return $this->db->delete('products');
    }
    public function product_status($value)
    {
       $this->db->where('product_id',$value);
       $data=[
        'status'=>0
        ];
        return $this->db->update('products',$data); 
    }
    public function product_status_update($value)
    {
       $this->db->where('product_id',$value);
       $data=[
        'status'=>1
        ];
        return $this->db->update('products',$data); 
    }
    public function datasearch($name)
    {
        $sql="SELECT * FROM products WHERE  cities='$name' OR states='$name'" ;
        return $this->db->query($sql)->result();
    }
    public function listingcount()
    {
        $this->db->select('product_category,COUNT(product_category) AS total');
        $this->db->from('products');
        $this->db->distinct();
        $this->db->group_by('product_category');
        return $query = $this->db->get()->result(); 
    }
    public function listingData()
    {
        return $query = $this->db->get('products')->result(); 
    }
    public function product_id($option)
    {
        return $this->db->get_where('products',array('product_id'=>$option))->result();
    }
    public function selectCategory($option)
    {
        return $this->db->get_where('products',array('product_category'=>$option))->result();
    }
}