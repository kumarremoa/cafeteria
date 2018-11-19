<?php 
/**
 * Shubham Sahu
 */
class Waiter_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function listing()
    {
    	return $this->db->get('waiter')->result();
    }
    
    public function save($value)
    {
    	return $this->db->Insert('waiter',$value);
    }
    public function delete($id)
    {
    	return $this->db->delete('waiter',array('id' => $id));
    }	
    public function selectId($value)
    {
    	return $this->db->get_where('waiter',array('id'=>$value))->result();
    }
    public function update($id,$value)
    {
        $this->db->where('id',$id);
        return $this->db->update('waiter',$value);
    }
}