<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Data_rekap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') != "admin"){
			redirect(base_url('auth'));
		}
		$this->load->model('data_rekap_model','data_rekap');
		$this->load->model('Berkas_dokumen_model');
	}

	
	public function index()
	{
		// $data['rekap'] = $this->data_rekap->get_all()->result();
		// print_r($data);
		// print_r($data['status']);

		$data['opd'] = $this->input->get('id_unor');
		$data['status'] = $this->input->get('status');
		$data['nip_nama'] = $this->input->get('nama_nip');

		$filter =array(
				"filter" => $this->input->get('filter'),
				"opd" => $this->input->get('id_unor'),
				"status" => $this->input->get('status'),
				"nip_nama" => $this->input->get('nama_nip')
		);
		$data['rekap'] = $this->data_rekap->get_all($filter)->result();
		


		// $filter = $this->data_rekap->get_all($data);
		$this->load->view('data_rekap', $data);
	}
	
	
	public function ajax_list()
	{
		// $data =array(
		// 	"filter" => $this->input->get('filter'),
		// 	"opd" => $this->input->get('id_unor'),
		// 	"status" => $this->input->get('status'),
		// 	"nip_nama" => $this->input->get('nama_nip')
		// );

		$list = $this->data_rekap->get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		
		foreach ($list as $data_rekap) {
			$no++;
			$row = array();
			
			
			$row[] = $no;
			$row[] = $data_rekap->nip;
			$row[] = $data_rekap->nama;
			$row[] = $data_rekap->opd;
			$row[] = $data_rekap->judul;
			$row[] = $data_rekap->status;
			
			// $row[] = '<a href="'.base_url("data_rekap/view").'/'.$data_rekap->id.'" class="pull-center btn btn-success">View</a> <a href="'.base_url("data_rekap/edit").'/'.$data_rekap->id.'" class="pull-center btn btn-info">Edit Data</a> <a href="'.base_url("data_rekap/edit_password").'/'.$data_rekap->id.'" class="pull-center btn btn-info">Edit Password</a> <a class="btn btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_unit('."'".$data_rekap->id."'".')">Delete</a>';			
			

			$data[] = $row;
		}
		
		

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->data_rekap->count_all(),
						"recordsFiltered" => $this->data_rekap->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}		
		
		
	public function ajax_delete($id)
	{
		
		$this->data_rekap->delete_by_id("id",$id,"akun");
		echo json_encode(array("status" => TRUE));

	}


	public function konfirmasi($id){
		// $this->db->where('id', $id);
		$data['status'] = 'diterima';
		$this->Berkas_dokumen_model->update_status($id, $data);
		// redirect('data_rekap/view');
		redirect ( $_SERVER['HTTP_REFERER']);
	}


	public function tolak($id){
		$data['id_berkas'] = $id; //get id berkas
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
		redirect(base_url()."data_rekap/view/".$id_peg);
		// redirect('data_rekap/view/.' $id_peg);
		
	}

	public function excel()
	{
		
		$list['rekap'] = $this->data_rekap->excel()->result();
			
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setCreator('E-DOKUMEN KAB SUKOHARJO');
		$object->getProperties()->setLastModifiedBy('E-DOKUMEN KAB SUKOHARJO');
		$object->getProperties()->setTitle('REKAP BERKAS DOKUMEN');

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'NO');
		$object->getActiveSheet()->setCellValue('B1', 'NIP');
		$object->getActiveSheet()->setCellValue('C1', 'NAMA');
		$object->getActiveSheet()->setCellValue('D1', 'OPD');
		$object->getActiveSheet()->setCellValue('E1', 'DOKUMEN');
		$object->getActiveSheet()->setCellValue('F1', 'STATUS');

		$baris = 2;
		$no = 1;

		foreach ($list['rekap'] as $rekap) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $rekap->nip);
			$object->getActiveSheet()->setCellValue('C'.$baris, $rekap->nama);
			$object->getActiveSheet()->setCellValue('D'.$baris, $rekap->opd);
			$object->getActiveSheet()->setCellValue('E'.$baris, $rekap->judul);
			$object->getActiveSheet()->setCellValue('F'.$baris, $rekap->status);

			$baris++;
		}

		$filename="Data_Rekap".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Rekap Berkas Pegawai");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		ob_end_clean();
		$writer->save('php://output');

		exit;

	}

	public function filter_excel()
	{
		$filter =array(
			"filter" => $this->input->post('filter'),
			"opd" => $this->input->post('id_unor'),
			"status" => $this->input->post('status'),
			"nip_nama" => $this->input->post('nama_nip')
		);
		// print_r($filter);

		$list['rekap'] = $this->data_rekap->get_all($filter)->result();
		// print_r($list);


		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setCreator('E-DOKUMEN KAB SUKOHARJO');
		$object->getProperties()->setLastModifiedBy('E-DOKUMEN KAB SUKOHARJO');
		$object->getProperties()->setTitle('REKAP BERKAS DOKUMEN');

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1', 'NO');
		$object->getActiveSheet()->setCellValue('B1', 'NIP');
		$object->getActiveSheet()->setCellValue('C1', 'NAMA');
		$object->getActiveSheet()->setCellValue('D1', 'OPD');
		$object->getActiveSheet()->setCellValue('E1', 'DOKUMEN');
		$object->getActiveSheet()->setCellValue('F1', 'STATUS');

		$baris = 2;
		$no = 1;

		foreach ($list['rekap'] as $rekap) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $rekap->nip);
			$object->getActiveSheet()->setCellValue('C'.$baris, $rekap->nama);
			$object->getActiveSheet()->setCellValue('D'.$baris, $rekap->opd);
			$object->getActiveSheet()->setCellValue('E'.$baris, $rekap->judul);
			$object->getActiveSheet()->setCellValue('F'.$baris, $rekap->status);

			$baris++;
		}

		$filename="Data_Rekap".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Rekap Berkas Pegawai");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		ob_end_clean();
		$writer->save('php://output');

		exit;

	}
	

	

	
	
}


