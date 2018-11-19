<?php
/**
 * Shubham Sahu
 */
class Brand_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
   
    public function listing(){
    	return $this->db->get('brand_table')->result();
    }
    public function savedata($data){
    	return $this->db->insert('brand_table',$data);
    }
    public function edit($id){
    	$this->db->where('SN',$id);
		return $this->db->get('brand_table')->result();
    }
    public function update($id,$data){
    	$this->db->where('SN',$id);
		return $this->db->update('brand_table',$data);
    }
    public function selectId($id)
    {
        $this->db->where('SN',$id);
        return $this->db->get('brand_table')->result();
    }
}