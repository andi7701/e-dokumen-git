<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dok_pribadi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') != "user"){
			redirect(base_url('auth'));
		}
		$this->load->model('data_pegawai_model','dok_pribadi');
	}

	
	public function index()
	{
		$this->load->view('dok_pribadi');
	}
	
	
	public function edit()
	{
		$this->load->view('dok_pribadi_edit');
	}
	

	public function ajax_update()
	{
		
		$id = $this->session->userdata('id');
		
		$config['max_size'] = 10000;
		$config['upload_path'] = './file/upload/'; //path folder
		$config['allowed_types'] = 'pdf|jpeg|jpg|png'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
				
		$this->load->library('upload');
		$this->upload->initialize($config);			
		
		
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
			$this->input->post('username') != ""
				){
				
				
				if(!empty($_FILES['foto']['name'])){
					$this->upload->do_upload('foto');
					$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
					$foto = $upload_data['file_name'];	

					$data1 = array(	
								'foto' => $foto
							);				
					$this->data_pribadi->update(array('id' => $id), $data1, "akun");	
				}	
					
				
		$data = array(
		        'username' => $this->input->post('username'),
		        'nama' => strtoupper($this->input->post('nama')),
		        'nip' => strtoupper($this->input->post('nip')),
		        'opd' => strtoupper($this->input->post('opd')),
		        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		        'agama' => $this->input->post('agama'),
		        'alamat' => strtoupper($this->input->post('alamat')),
		        'no_hp' => strtoupper($this->input->post('no_hp'))
			);
		$this->data_pribadi->update(array('id' => $id), $data, "akun");

		echo json_encode(array("status" => TRUE));	
		}
		else{
		echo json_encode(array("status" => FALSE));
		}
	}
		
		
		

	
}


