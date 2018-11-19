<?php 
/**
 * Shubham Sahu
 */
class Restaurant_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function listing()
    {
        $this->db->order_by("res_id", "desc");
    	return $this->db->get('restaurant')->result();
    }
    public function filter($value)
    {
    	return $this->db->get_where('restaurant',array('res_seat'=>$value))->result();
    }
    public function save($value)
    {
    	return $this->db->Insert('restaurant',$value);
    }
    public function delete($id)
    {
    	return $this->db->delete('restaurant',array('res_id' => $id));
    }	
    public function selectId($value)
    {
    	return $this->db->get_where('restaurant',array('res_id'=>$value))->result();
    }
    public function booking_seat($id,$name)
    {           
        $this->db->where('res_id',$id);
        return $data=$this->db->update('restaurant',$name);
           
    }
}