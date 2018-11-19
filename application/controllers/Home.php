<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function sponge_bucket()
	{
		$this->load->view('index');
	}
	public function user()
	{
		$this->load->view('index');
	}
	public function ownerShip()
	{
		$this->load->view('index');
	}
}
