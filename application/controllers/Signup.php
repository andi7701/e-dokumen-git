<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('signup_model','signup');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('signup');
	}


	public function create()
	{
			$this->db->select('username');
			$this->db->where('username', $this->input->post('username'));
			$akun = $this->db->get('user');

			foreach($akun->result() as $row){
			redirect('auth');
			}
		
	
	if($this->input->post('password') == $this->input->post('confirmpassword')){
		
		$data = array(		
				'username' => $this->input->post('username'),				
				'password' => md5($this->input->post('password')),
				'level' => "admin"
			);
		$insert = $this->signup->save($data,"user");
		
		$data_session = array(
				'status' => "login",
				'id' => $insert,
				'level' => "admin"					
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('');
		
	    }else{
	        
			redirect('signup');
	        
	    }	
			
	}

}
