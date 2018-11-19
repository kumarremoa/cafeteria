<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */
class Name extends ExtendsName
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function listing()
    {
    	return $this->db->get('')->result();	
    }
}