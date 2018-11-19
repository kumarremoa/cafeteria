<?php
/**
 * Shubham Sahu
 */
class Category_model extends CI_Model
{
    
    public function __construct()
    {
     parent::__construct();  
     $this->load->database(); 
    }
    public function listing(){
    	return $this->db->get('category_table')->result();
    }
    public function savedata($data){
    	return $this->db->insert('category_table',$data);
    }
    public function edit($id){
    	$this->db->where('cat_id',$id);
		return $this->db->get('category_table')->result();
    }
    public function update($id,$data){
    	$this->db->where('cat_id',$id);
		return $this->db->update('category_table',$data);
    }
    /*public function country_list($country,$name){
        $this->db->select('*');
        $this->db->from('countries con, states s, cities c');
        $this->db->where('con.id = s.country_id');
        $this->db->where('s.id = c.state_id');
        return $query = $this->db->get()->result();
        
    }*/
    public function datasearch($name)
    {
        $sql="SELECT * FROM cities WHERE  city_name='$name' OR city_state='$name'" ;
        return $this->db->query($sql)->result();
    }
    

}