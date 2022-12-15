<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usul_dokumen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') != "admin"){
			redirect(base_url('auth'));
		}
		$this->load->model('usul_dokumen_model','usul_dokumen');
		$this->load->model('Berkas_dokumen_model');
	}

	
	public function index()
	{
		$data['opd'] = $this->input->get('id_unor');
		$data['dokumen'] = $this->input->get('id_dokumen');
		// $data['nip_nama'] = $this->input->get('nama_nip');
		
		$filter =array(	
				"filter" => $this->input->get('filter'),
				"opd" => $this->input->get('id_unor'),
				"dokumen" => $this->input->get('id_dokumen'),
				// "nip_nama" => $this->input->get('nama_nip'),
		);

		$data['berkas'] = $this->usul_dokumen->get_all($filter)->result_array();
		// print_r($data);
		$this->load->view('usul_dokumen',$data);
	}
	
	// INDEX VIEW WITH AJAX
	
	// public function ajax_list()
	// {
	// 	$list = $this->usul_dokumen->get_datatables();
	// 	// print_r($list);
	// 	$data = array();
	// 	$no = $_POST['start'];
		
		
	// 	foreach ($list as $usul_dokumen) {
	// 		$no++;
	// 		$row = array();
			
	// 		$row[] = $no;
	// 		$row[] = $usul_dokumen->nip;
	// 		$row[] = $usul_dokumen->nama;
	// 		$row[] = $usul_dokumen->opd;
	// 		$row[] = $usul_dokumen->judul_berkas;

	// 		if($usul_dokumen->status == 'diproses'){
	// 			$row[] = '<a class="btn btn-info ">Diproses</a>';
	// 			$row[] = 
	// 			'<a target="_BLANK" href="'.base_url("file/upload").'/'.$usul_dokumen->file.'" class="btn btn-info fa fa-eye">View</a>
	// 			<a href="#" id="btn-setuju" data-id="$usul_dokumen->id;" class="btn btn-success btn-sm fa fa-check-circle"></a> 
	// 			<a href="#" id="btn-tolak" data-id="$usul_dokumen->id;" class="btn btn-danger btn-sm fa fa-close"></a> ';		
	// 		}if($usul_dokumen->status == 'diupdate'){
	// 			$row[] = '<a class="btn btn-primary ">Diupdate</a>';
	// 			$row[] = 
	// 			'<a target="_BLANK" href="'.base_url("file/upload").'/'.$usul_dokumen->file.'" class="btn btn-info fa fa-eye">View</a>
	// 			<a href="'.base_url("usul_dokumen/konfirmasi").'/'.$usul_dokumen->id.'" class="btn btn-success btn-sm fa fa-check-circle"></a> 
	// 			<a href="'.base_url("usul_dokumen/tolak").'/'.$usul_dokumen->id.'" class="btn btn-danger btn-sm fa fa-close"></a> ';		
	// 		}
		
	// 		$data[] = $row;
	// 	}
		
		

	// 	$output = array(
	// 					"draw" => $_POST['draw'],
	// 					"recordsTotal" => $this->usul_dokumen->count_all(),
	// 					"recordsFiltered" => $this->usul_dokumen->count_filtered(),
	// 					"data" => $data,
	// 			);
	// 	//output to json format
	// 	echo json_encode($output);
	// }		
		
				
	public function konfirmasi(){
		// $this->db->where('id', $id);
		$id = $this->input->post('berkas_id');
		// print_r($id);
		$data['status'] = 'diterima';
		$this->Berkas_dokumen_model->update_status($id, $data);
		// redirect('usul_dokumen/view');
		redirect ( $_SERVER['HTTP_REFERER']);
	}


	public function tolak($id){
		$data = array(
			'id_berkas' => $id,
			'source' => 'usul_dokumen',
		);
		// $data['id_berkas'] = $id; //get id berkas
		// print_r($id_berkas);
		$this->load->view('validasi_tolak', $data);
	}

	public function tolak_request(){
		$id_berkas =  $this->uri->segment(3); //get id dokumen
		$data = array(
			'status' => 'ditolak',
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->Berkas_dokumen_model->update_status_tolak($id_berkas, $data);
		redirect(base_url()."usul_dokumen");
		
	}

	
}


