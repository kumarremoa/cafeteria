<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * shubham Sahu
 */
class Merchant extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('User_model','Product_model');
        if(!$this->session->userdata('login_in')==true)
	    {
	      redirect(base_url().'login/logout');
	    }
    }
    public function index()
    {
    	$id=$this->session->userdata('id');
		$email=$this->session->userdata('email');
		$data['users']=$this->db->get_where('users',array('id'=>$id))->result();
		$data['state']=$this->db->query('SELECT DISTINCT city_state FROM cities')->result();
		$data['category']=$this->db->get_where('booking',array('email'=>$email))->result();
		$this->load->view('profile',$data);
    }
    public function update()
    {
        $length='10';
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
            $config['upload_path']          = './restimage/';
            $config['file_name']            = $str;
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else{
                
                $data = array('upload_data' => $this->upload->data());
                $image=$str.$this->upload->data('file_name');
            }

            if( ! $this->upload->do_upload('restorent_image'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else{
                
                $data = array('upload_data' => $this->upload->data());
                $restimg=$str.$this->upload->data('file_name');
            }
                $data=[
                'restaurant_name'=>$this->input->post('restaurant_name'),
                'restorent_image'=> $restimg,
                'restorent_logo'=> $image,
                'description'=>$this->input->post('description'),
                'wysihtml5_mode'=>$this->input->post('description'),
                'mobile'=>$this->input->post('mobile'),
                'Email'=>$this->input->post('Email'),
                'country'=>$this->input->post('country'),
                'state_booking'=>$this->input->post('state_booking'),
                'city_booking'=>$this->input->post('city_booking'),
                'street_1'=>$this->input->post('street_1'),
                'postal_code'=>$this->input->post('postal_code'),
                'user_id'=>$this->session->userdata('id'),   
                ];
                $this->User_model->updateUser($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Records Update successfull.</div>');
                redirect('profile','refresh');
            
    }
    public function product()
    {
        $id=$this->session->userdata('id');
        $user_id=$this->db->get_where('merchant',array('user_id'=> $id))->result();

        $length='10';
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
            for ($i = 0; $i < $length; $i++) {
                $rand = mt_rand(0, $max);
                $str .= $characters[$rand];
            }
            $config['upload_path']          = './products/';
            $config['file_name']            = $str;
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else{
                
                $data = array('upload_data' => $this->upload->data());
                $image=$str.$this->upload->data('file_name');
            }
                $data=[
                'product_category'=>$this->input->post('product_category'),
                'product_image'=> $image,
                'product_address'=>$this->input->post('description'),
                'product_sub_cat'=>$this->input->post('product_sub_cat'),
                'product_name'=>$this->input->post('product_title'),
                'product_price'=>$this->input->post('price'),
                'product_discount'=>$this->input->post('discount'),
                'discount_total'=>$this->input->post('dis_price'),
                'cities'=>$user_id[0]->city_booking,
                'states'=>$user_id[0]->state_booking,
                'user_id'=>$id,   
                ];
                
                $this->Product_model->save_product($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Records Update successfull.</div>');
                redirect('profile','refresh');
    }

}