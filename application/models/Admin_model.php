<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	/*login admin*/
	/*public function admin_login($user_email,$user_pass)
	{
	return	$data=$this->db->get_where('admin',array('admin_name'=> $user_email,'password'=>$user_pass,))->result();		
	}*/
	public function login_user($email,$pass){
 
		  $this->db->select('*');
		  $this->db->from('admin');
		  $this->db->where('admin_name',$email);
		  $this->db->where('password',$pass);
		 
		  if($query=$this->db->get())
		  {
		      return $query->row_array();
		  }
		  else{
		    return false;
		  }
		 
		 
		}




	
}
