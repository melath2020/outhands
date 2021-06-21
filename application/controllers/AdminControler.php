<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminControler extends CI_Controller {

    public function dashboard()
	{
		$this->load->model('WebModel');
		$data['display']=$this->WebModel->get_reg();
		$this->load->view('dashboard',$data);
        
	}
    public function edit($id)
    {
	$this->load->model('WebModel');
	$data['data']=$this->WebModel->get_editadmin($id);
	$this->load->view('editadmin',$data);
    }
    public function update($id)
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
     $this->form_validation->set_rules('file','file','required');

		if($this->form_validation->run()==true)
		{
            $data['username']=$this->input->post('username');
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $data['phone']=$this->input->post('phone');
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
           
           
		$this->WebModel->change_admin($data,$id);
        redirect(base_url().'dashboard');
           
       }
       
		else
		{
			echo validation_errors();
		}


    }
    public function delete($id)
    {
	$this->load->model('WebModel');
	if($this->WebModel->delete($id))
	{
    redirect(base_url().'dashboard');
	}

    }
    
}