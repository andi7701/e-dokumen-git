<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') != "admin"){
			redirect(base_url('auth'));
		}
		$this->load->model('data_pegawai_model','data_pegawai');
		$this->load->model('Berkas_dokumen_model');
	}

	
	public function index()
	{
		$this->load->view('data_pegawai');
	}
	
	public function view()
	{
		// $id_peg = $this->uri->segment(3);
		// print_r($id);
		$this->load->view('data_pegawai_view');
	}

	public function add()
	{
		$this->load->view('data_pegawai_add');
	}
	
	public function edit()
	{
		$this->load->view('data_pegawai_edit');
	}
	
	public function edit_password()
	{
		$this->load->view('data_pegawai_edit_password');
	}

	/*public function konfirmasi($id_pinjaman){
		$data['status_pengajuan'] = 'diterima';
		$this->M_Pinjaman->update($id_pinjaman, $data);
		redirect('data_pegawai_view');
	}
	
	public function ditolak($id_pinjaman){
		$data['status_pengajuan'] = 'ditolak';
		$data['keterangan'] ='ditolak';
		$this->M_Pinjaman->update($id_pinjaman, $data);
		$this->M_Pinjaman->hapus_detail_angsuran($id_pinjaman);
		redirect('data_pegawai_view');
	}*/

	public function ajax_list()
	{
		$list = $this->data_pegawai->get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		
		foreach ($list as $data_pegawai) {
			$no++;
			$row = array();
			
			
			$row[] = $no;
			$row[] = $data_pegawai->nip;
			$row[] = $data_pegawai->nama;
			
			$row[] = '<a href="'.base_url("data_pegawai/view").'/'.$data_pegawai->id.'" class="pull-center btn btn-success">View</a> <a href="'.base_url("data_pegawai/edit").'/'.$data_pegawai->id.'" class="pull-center btn btn-info">Edit Data</a> <a href="'.base_url("data_pegawai/edit_password").'/'.$data_pegawai->id.'" class="pull-center btn btn-info">Edit Password</a> <a class="btn btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_unit('."'".$data_pegawai->id."'".')">Delete</a>';			
			

			$data[] = $row;
		}
		
		

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->data_pegawai->count_all(),
						"recordsFiltered" => $this->data_pegawai->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}		
		
		
	public function ajax_delete($id)
	{
		
		$this->data_pegawai->delete_by_id("id",$id,"akun");
		echo json_encode(array("status" => TRUE));

	}

	

	public function ajax_add()
	{
		
		$config['max_size'] = 2000;
		$config['upload_path'] = './file/upload/'; //path folder
		$config['allowed_types'] = 'pdf|jpeg|jpg|png'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
				
		$this->load->library('upload');
		$this->upload->initialize($config);			
		
		if(
			$this->input->post('username') != "" &&
			$this->input->post('password') != "" &&
			($this->input->post('password') == $this->input->post('confirmpassword'))
			){
				
				$foto = "";
				
				
				if(!empty($_FILES['foto']['name'])){
					$this->upload->do_upload('foto');
					$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
					$foto = $upload_data['file_name'];					
				}
				
				
		$data = array(
		        
		        'username' => $this->input->post('username'),
		        'password' => md5($this->input->post('password')),
		        'nama' => strtoupper($this->input->post('nama')),
		        'nip' => strtoupper($this->input->post('nip')),
		        'id_unor' => strtoupper($this->input->post('id_unor')),
		        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		        'agama' => $this->input->post('agama'),
		        'alamat' => strtoupper($this->input->post('alamat')),
		        'no_hp' => strtoupper($this->input->post('no_hp')),
		        'foto' => $foto,
		        'level' => 'user'
		    
			);
		$insert = $this->data_pegawai->save($data, "akun");
		
    	echo json_encode(array("status" => TRUE, "id" => $insert));
		}
		else{
		echo json_encode(array("status" => FALSE));
		}
	}

	public function ajax_update($id)
	{
		
		$config['max_size'] = 2000;
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
					$this->data_pegawai->update(array('id' => $id), $data1, "akun");	
				}	
				
				
		$data = array(
		        'username' => $this->input->post('username'),
		        'nama' => strtoupper($this->input->post('nama')),
		        'nip' => strtoupper($this->input->post('nip')),
		        'id_unor' => strtoupper($this->input->post('id_unor')),
		        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		        'agama' => $this->input->post('agama'),
		        'alamat' => strtoupper($this->input->post('alamat')),
		        'no_hp' => strtoupper($this->input->post('no_hp'))
			);
		$this->data_pegawai->update(array('id' => $id), $data, "akun");

		echo json_encode(array("status" => TRUE));	
		}
		else{
		echo json_encode(array("status" => FALSE));
		}
	}
		
		
	

	public function ajax_update_password($id)
	{
		
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
		        'username' => $this->input->post('username'),
		        'password' => md5($this->input->post('password'))
			);
		$this->data_pegawai->update(array('id' => $id), $data, "akun");

		echo json_encode(array("status" => TRUE));	
		}
		else{
		echo json_encode(array("status" => FALSE));
		}
	}


	public function konfirmasi($id){
		// $this->db->where('id', $id);
		$data['status'] = 'diterima';
		$this->Berkas_dokumen_model->update_status($id, $data);
		// redirect('Data_pegawai/view');
		redirect ( $_SERVER['HTTP_REFERER']);
	}


	public function tolak($id){
		$data = array(
			'id_berkas' => $id,
			'source' => 'data_pegawai',
		);
		// print_r($id_berkas);
		$this->load->view('validasi_tolak', $data);
	}

	public function tolak_request(){
		$id_berkas =  $this->uri->segment(3); //get id dokumen
		$id_peg = $this->Berkas_dokumen_model->get_id_akun($id_berkas); //get id pegawai
		// print_r($id);
		// print_r($id_peg);
		$data = array(
			'status' => 'ditolak',
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->Berkas_dokumen_model->update_status_tolak($id_berkas, $data);
		redirect(base_url()."data_pegawai/view/".$id_peg);
		// redirect('data_pegawai/view/.' $id_peg);
		
	}

	// public function ajax_validasi_tolak($id)
	// {
	// 	// $data = array(
	// 	// 	'status' => 'ditolak',
	// 	// 	'keterangan' => $this->input->post('keterangan'),
	// 	// );
	// 	$data['status'] = 'ditolak';
	// 	$data['keterangan'] ='ditolak';
	// 	$this->Berkas_dokumen_model->update_status_tolak($id, $data);
	// 	echo json_encode(array("status" => TRUE));
	// }

	// public function ajax_delete($id)
	// {
		
	// 	$this->data_pegawai->delete_by_id("id",$id,"akun");
	// 	echo json_encode(array("status" => TRUE));

	// }
	
	/*
	public function ditolak($id_pinjaman){
		$data['status_pengajuan'] = 'ditolak';
		$data['keterangan'] ='ditolak';
		$this->M_Pinjaman->update($id_pinjaman, $data);
		$this->M_Pinjaman->hapus_detail_angsuran($id_pinjaman);
		redirect('viewer/C_Pinjaman/list_pinjaman_ketua');
	}	*/

	
}


