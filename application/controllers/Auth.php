<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('login');
	}
	
 
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("akun",$where)->num_rows();
		if($cek > 0){
			$this->db->select('id');
			$this->db->select('username');
			$this->db->select('level');
			$this->db->where('username', $username);
			$akun = $this->db->get('akun');

			foreach($akun->result() as $row){
			$id = $row->id;
			$level = $row->level;
			}
  
			$data_session = array(
				'status' => "login",
				'id' => $id,
				'level' => $level
				);
 
			$this->session->set_userdata($data_session);
			redirect('');
 
		}else{
			echo "Username dan password salah !";
			redirect('auth');			
		}
	}
 
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}