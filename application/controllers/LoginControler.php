<?php
defined('BASEPATH')OR exit('no direct scripts access allowed');
/**
 * 
 */
class LoginControler extends CI_Controller
{
	
public function login()

	{
$this->load->view('login.php');		
	}
	public function userlogin()
{
	$this->load->model('WebModel');
	$data['display']=$this->WebModel->get_reg();
	$this->load->view('userlogin',$data);
}

	public function adminlogin()

	{
$this->load->view('adminlogin.php');		
	}



	public function sign()
	{
		$this->load->model('LoginModel');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==true)
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if($this->LoginModel->log($username,$password))
			{
				$this->session->set_flashdata('success','login success');
				redirect(base_url().'userlogin');
			}
			else
			{
				$this->session->set_flashdata('failed','login failed');
				redirect(base_url().'index');
			}
			

		}
		else
		{
			echo validation_errors();
		}
	}
	public function signadmin()
	{
		$this->load->model('LoginModel');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==true)
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if($this->LoginModel->logsign($username,$password))
			{
				$this->session->set_flashdata('success','login success');
				redirect(base_url().'dashboard');
			}
			else
			{
				$this->session->set_flashdata('failed','login failed');
				redirect(base_url().'index');
			}
			

		}
		else
		{
			echo validation_errors();
		}
	}
}

