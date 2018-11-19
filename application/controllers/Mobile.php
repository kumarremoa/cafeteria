<?php
defined('BASEPATH') or exit('No script direct access allowed');
/**
 * shubham Sahu
 */
class Mobile extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model(array('Product_model','Category_model'));
        $this->load->helper(array('cookie', 'url'));
        $this->load->library('email');
    }
    public function index()
    {
    	$this->load->view('mobile-no');
    }
    public function check()
    {
    	$config = Array(
		'protocol' => 'smtp',
        'smtp_host' => 'smtp3.netcore.co.in',
        'smtp_port' => 25,
        'smtp_user' => 'support@9abusiness.com',
        'smtp_pass' => 'Supp0rt',
        'mailtype'  => 'html', 
        'charset' => 'utf-8',
        'wordwrap' => TRUE
    );
		
		$this->load->library('email',$config);
    	$email=$this->input->post('mobile');
    	$this->email->clear();
    	$name='Shubham';
        $this->email->to($email);
        $this->email->from('noreply@gmail.com');
        $this->email->subject('Here is your info '.$name);
        $this->email->message('Hi '.$name.' Here is the info you requested.');
        $this->email->send();
		redirect('mobile','refresh');
    }

}