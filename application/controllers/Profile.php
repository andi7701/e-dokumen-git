<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model','profile');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('profile');
	}
	
	public function ajax_update()
	{
		
		
		    $id = $this->session->userdata('id');
	    	$usernameexist = 0;
    		
    		
    		$this->db->select('username');
			$this->db->where('id !=', $id);
			$this->db->where('username', $this->input->post('username'));
			$akun = $this->db->get('akun');

			foreach($akun->result() as $row){
			 $usernameexist = 1;
			}	  		
		
		
		if(
			$usernameexist == 0 &&
			$this->input->post('password') != "" &&
			($this->input->post('password') == $this->input->post('confirmpassword'))
				){
				
						
				
		$data = array(
		        'nama' => $this->input->post('nama'),
		        'username' => $this->input->post('username'),
		        'password' => md5($this->input->post('password'))
			);
		$this->profile->update(array('id' => $id), $data, "akun");

		echo json_encode(array("status" => TRUE));	
		}
		else{
		echo json_encode(array("status" => FALSE));
		}
		

	}
	


}
