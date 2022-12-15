<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') != "admin"){
			redirect(base_url('auth'));
		}		
		$this->load->model('setting_model','setting');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('setting');
	}
	
	public function ajax_update()
	{
		$config['max_size'] = 2000;
				$config['upload_path'] = './file/upload/'; //path folder
				$config['allowed_types'] = 'jpg|png'; //type yang dapat diakses bisa anda sesuaikan
				$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
				

				$this->load->library('upload');
				$this->upload->initialize($config);	
			
			
				if(
				$this->input->post('nama_instansi') != "" &&
				$this->input->post('induk_instansi') != "" &&
				$this->input->post('nama_lengkap_instansi') != "" &&
				$this->input->post('alamat') != "" &&
				$this->input->post('telepon') != "" &&
				$this->input->post('kota') != "" &&
				$this->input->post('jabatan_kepala') != "" &&
				$this->input->post('nama_kepala') != "" &&
				$this->input->post('golongan_kepala') != "" &&
				$this->input->post('nip_kepala') != ""
				){
					
					if(!empty($_FILES['logo']['name'])){
						$this->upload->do_upload('logo');
						$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
						$logo = $upload_data['file_name'];

						$data1 = array(	
									'logo' => $logo
									);		
									
						$this->setting->update(array('id' => '1'), $data1, "instansi");						
					}
					
					if(!empty($_FILES['logo_colored']['name'])){
						$this->upload->do_upload('logo_colored');
						$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
						$logo_colored = $upload_data['file_name'];

						$data2 = array(	
									'logo_colored' => $logo_colored
									);		
									
						$this->setting->update(array('id' => '1'), $data2, "instansi");				
					}
					
					$data = array(
					
					'nama_instansi' => $this->input->post('nama_instansi'),
					'induk_instansi' => $this->input->post('induk_instansi'),
					'nama_lengkap_instansi' => $this->input->post('nama_lengkap_instansi'),
					'alamat' => $this->input->post('alamat'),
					'telepon' => $this->input->post('telepon'),
					'kota' => $this->input->post('kota'),
					'jabatan_kepala' => $this->input->post('jabatan_kepala'),
					'nama_kepala' => $this->input->post('nama_kepala'),
					'golongan_kepala' => $this->input->post('golongan_kepala'),
					'nip_kepala' => $this->input->post('nip_kepala')
						
					);		
			
					$this->setting->update(array('id' => '1'), $data, "instansi");
			
			echo json_encode(array("status" => TRUE));
		}
		else{
			echo json_encode(array("status" => FALSE));
		}
	}
	


}
