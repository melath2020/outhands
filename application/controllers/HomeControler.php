<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeControler extends CI_Controller {

public function insert()
 {
 	$this->load->library('form_validation');
 	$this->load->model('WebModel');
 	$this->form_validation->set_rules('username','username','required');
	$this->form_validation->set_rules('email','email','required');
	$this->form_validation->set_rules('password','password','required');
	$this->form_validation->set_rules('phone','phone','required');
	$this->form_validation->set_rules('country','country','required');
	$this->form_validation->set_rules('state','state','required');
	$this->form_validation->set_rules('city','city','required');
	$this->form_validation->set_rules('gender','gender','required');

		if($this->form_validation->run()==true)
		{
		
        $data['username']=$this->input->post('username');
        $data['email']=$this->input->post('email');
        $data['password']=$this->input->post('password');
		$data['phone']=$this->input->post('phone');
		$data['country']=$this->input->post('country');
        $data['state']=$this->input->post('state');
		$data['city']=$this->input->post('city');
		$data['gender']=$this->input->post('gender');
		

		$config['upload_path']='./images';
		$config['allowed_types']='jpg|pdf|jpeg|png|gif|JPG|JPEG|PNG|GIF';
		$config['file_name']=md5(date('d-m-y H:i:sa'));
		
		$this->load->library('upload',$config);

		$this->upload->do_upload('Image');
		
			
			$file=$this->upload->data();
			$data['file']=$file['file_name'];
           
		$this->WebModel->loginreg($data);
        redirect(base_url().'index');
           
       }

        
       
		else
		{
			echo validation_errors();
		}
	
}

}
