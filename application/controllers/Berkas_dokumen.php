<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas_dokumen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berkas_dokumen_model','berkas_dokumen');
		$this->load->model('dokumen_model','dokumen');
	}


	public function add()
	{
		$this->load->view('berkas_dokumen_add');
	}
	
	public function edit()
	{
		$this->load->view('berkas_dokumen_edit');
	}
	
		
	public function ajax_delete($id)
	{
		

		$data = array(
		        'id' => $id,
		        'id_akun' => $this->session->userdata('id')
			);
		$this->berkas_dokumen->delete_by_id(array('id' => $id), $data, "berkas_dokumen");		
		
		echo json_encode(array("status" => TRUE));

	}
	
	// public function testing()
	// {
	// 	$id = $this->input->post('id_dokumen');
	// 	// print_r($id);
	// 	$size = $this->dokumen->get_size($id);
	// 	print_r($size);
	// }

	public function ajax_add()
	{
		$id = $this->input->post('id_dokumen');
		// print_r($size_id);
		$size = $this->dokumen->get_size($id);
		$msg = "Upload Berkas Sesuai Dengan Ketentuan !!!";
		$config['max_size'] = $size;
		$config['upload_path'] = './file/upload/'; //path folder
		$config['allowed_types'] = 'pdf|jpeg|jpg|png'; //type yang dapat diakses bisa anda sesuaikan
		$config['file_name'] = "berkas_". date("YmdHis") .".pdf"; //nama yang terupload nantinya
		$config['encrypt_name'] = false; //nama yang terupload nantinya
				
		$this->load->library('upload');
		$this->upload->initialize($config);			
		
		if(
			$this->input->post('id_dokumen') != "" &&
			$this->input->post('judul_berkas') != ""
			){
				
				$file = "";
				
				if(!empty($_FILES['file']['name'])){
					if($this->upload->do_upload('file')){
						$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
						$file = $upload_data['file_name'];	

						$data = array(
		        			    'id_akun' => $this->session->userdata('id'),
						        'id_dokumen' => $this->input->post('id_dokumen'),
						        'judul_berkas' => strtoupper($this->input->post('judul_berkas')),
						        'file' => $file,
								'status' => 'diproses'
						    
							);
						$insert = $this->berkas_dokumen->save($data, "berkas_dokumen");
						
				    	echo json_encode(array("status" => TRUE, "id" => $insert));
					}else{
						echo json_encode(array("status" => FALSE, "message" => $msg));
					};				
				}else{
					echo json_encode(array("status" => FALSE));
				}
		
		}
		else{
		echo json_encode(array("status" => FALSE));
		}
	}

	public function ajax_update($id)
	{
		$size = $this->dokumen->get_size($id);
		$msg = "Upload Berkas Sesuai Dengan Ketentuan !!!";
		$config['max_size'] = $size;
		$config['upload_path'] = './file/upload/'; //path folder
		$config['allowed_types'] = 'pdf|jpeg|jpg|png'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
				
		$this->load->library('upload');
		$this->upload->initialize($config);			
		
			
		
		
		if(
			$this->input->post('id_dokumen') != "" &&
			$this->input->post('judul_berkas') != ""
				){
				
				$file = "";
				
				if(!empty($_FILES['file']['name'])){
					if($this->upload->do_upload('file')){
					$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
					$file = $upload_data['file_name'];	

					$data1 = array(	
								'id_dokumen' => $this->input->post('id_dokumen'),
		        				'judul_berkas' => strtoupper($this->input->post('judul_berkas')),
								'file' => $file,
								'status' => 'diupdated'
							);				
			$update = $this->berkas_dokumen->update(array('id' => $id), $data1, "berkas_dokumen");
			echo json_encode(array("status" => TRUE, "id" => $update));
				
				
				
		// $data = array(
		//         'id_dokumen' => $this->input->post('id_dokumen'),
		//         'judul_berkas' => strtoupper($this->input->post('judul_berkas'))
		// 	);
		// $update = $this->berkas_dokumen->update(array('id' => $id), $data, "berkas_dokumen");

		
		}else{
		echo json_encode(array("status" => FALSE, "message" => $msg));
		};					
		}else{
		echo json_encode(array("status" => FALSE));
		}
	}
		else{
		echo json_encode(array("status" => FALSE));
		}
		}
		

	


}


