<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shuabhm Sahu
 */
class Popular_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function listing()
    {
    	return $this->db->get('popular_brand')->result();
    }
    public function insert_data($data)
    {
    	return $this->db->insert('popular_brand',$data);
    }
    public function brand_edit($data)
    {
    	return $this->db->get_where('popular_brand',array('pop_id '=> $data))->result();
    }
    public function update_data($id,$data)
    {
    	$this->db->where('pop_id',$id);
    	return $this->db->update('popular_brand',$data);
    }
    public function deletebrand($value)
    {
    	//echo $value; die();
    	$this->db->where('pop_id',$value);
    	return $this->db->delete('popular_brand');
    }

}