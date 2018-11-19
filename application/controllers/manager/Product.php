<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Shubham Sahu
 */
class Product extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form','url');
        $this->load->model(array('ProductCat','Product_model'));
        if(!$this->session->userdata('manager_in')==true)
        {
          redirect(base_url().'admin/login/logout');
        }
    }
    public function index()
    {
        $data['listing']=$this->Product_model->listing();
    	$this->load->view('manager/product/index',$data);
    }
    public function add_product()
    {
        $data['category']=$this->ProductCat->cat_list();
    	$this->load->view('manager/product/product-add',$data);
    }
    public function selectCategory()
    {
        $id=$this->input->post('param');
        
        $data=$this->Product_model->selectList($id);
        echo '<div class="input-group-addon"></div><select class="form-control" name="product_sub_cat">';
        foreach($data as $val){
            echo '<option>'.$val->sub_cat_name.'</option>';
        }
        echo "</select>";

    }
    public function save()
    {
            
            $config['upload_path']          = './products/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if( ! $this->upload->do_upload('userfile'))
            {
                $this->session->set_flashdata('message', '<div class="alert alert-warning">
                                <strong>Warning!</strong> Image uploading is not successfull.
                                </div>');
            }
            else{
                
                $data = array('upload_data' => $this->upload->data());
                $image=$this->upload->data('file_name');
                $data=[
                'product_name'=>$this->input->post('product_name'),
                'product_image'=> $image,
                'product_price'=>$this->input->post('product_price'),
                'product_discount'=>$this->input->post('product_discount'),
                'discount_total'=>$this->input->post('discount_total'),
                'product_category'=>$this->input->post('product_category'),
                'product_sub_cat'=>$this->input->post('product_sub_cat'),
                'product_brand'=>$this->input->post('product_brand'),
                'product_desc'=>$this->input->post('product_desc'),
                'product_address'=>$this->input->post('product_address'),
                'deliver_time'=>$this->input->post('deliver_time'),   
                ];
                $this->Product_model->save_product($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                        <strong>Success!</strong> Records Saved successfull.
                            </div>');
                redirect('manager/product','refresh');
            }
            redirect('manager/product','refresh');

    }
    public function edit($id)
    {
        $data['category']=$this->ProductCat->cat_list();
        $data['list']=$this->Product_model->edit_product($id);
        $this->load->view('manager/product/product-edit',$data);
    }
    public function update($id)
    {
        if(! $this->input->post('userfile')!='')
        {
            $config['upload_path']          = './products/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if( ! $this->upload->do_upload('userfile'))
            {
                $image=$this->input->post('product_image');
            }
            else{
            $data = array('upload_data' => $this->upload->data());
            $image=$this->upload->data('file_name');  
            }
        }
                $data=[
                'product_name'=>$this->input->post('product_name'),
                'product_image'=> $image,
                'product_price'=>$this->input->post('product_price'),
                'product_discount'=>$this->input->post('product_discount'),
                'discount_total'=>$this->input->post('discount_total'),
                'product_category'=>$this->input->post('product_category'),
                'product_sub_cat'=>$this->input->post('product_sub_cat'),
                'product_brand'=>$this->input->post('product_brand'),
                'product_desc'=>$this->input->post('product_desc'),
                'product_address'=>$this->input->post('product_address'),
                'deliver_time'=>$this->input->post('deliver_time'),   
                ];
                $this->Product_model->update_product($id,$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">
                        <strong>Success!</strong> Records update successfull.
                            </div>');
                redirect('manager/product','refresh'); 
    }
    public function delete($id)
    {
        $this->Product_model->delete_product($id);
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
                        <strong>Success!</strong> Records deleted successfull.
                            </div>');
                redirect('manager/product','refresh');
    }
    public function status()
    {
        $value=$_REQUEST['param'];
        echo $this->Product_model->product_status($value);
    }
    public function status_update()
    {
        $value=$_REQUEST['param'];
        echo $this->Product_model->product_status_update($value);
    }
}