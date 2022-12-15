<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') != "admin"){
			redirect(base_url('auth'));
		}
		$this->load->model('dokumen_model','dokumen');
	}

	
	public function index()
	{
		$this->load->view('dokumen');
	}
	


	public function add()
	{
    		$this->load->view('dokumen_add');
	}
	
	public function edit()
	{
		if($this->session->userdata('level') == "admin"){
    		$this->load->view('dokumen_edit');
		}
	}

	
	public function ajax_list()
	{
		$list = $this->dokumen->get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		
		foreach ($list as $dokumen) {
			$no++;
			$row = array();
			
			
			$row[] = $dokumen->judul;
			

        	$row[] = '<a href="'.base_url("dokumen/edit").'/'.$dokumen->id.'" class="pull-center btn btn-info">Edit</a> <a class="btn btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_unit('."'".$dokumen->id."'".')">Delete</a>';			
        		

			$data[] = $row;
		}
		
		

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->dokumen->count_all(),
						"recordsFiltered" => $this->dokumen->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}		
	
	
	public function ajax_delete($id)
	{
    		$this->dokumen->delete_by_id("id",$id,"dokumen");
    		echo json_encode(array("status" => TRUE));
	}
	

	public function ajax_add()
	{
    		if(
    				$this->input->post('judul') != "" && 
					$this->input->post('size') != ""
    				){
    				    
            
    		$data = array(
    				'judul' => $this->input->post('judul'),
					'size' => $this->input->post('size')
    			);
    			
    		$insert = $this->dokumen->save($data, "dokumen");
    		
    		echo json_encode(array("status" => TRUE, "id" => $insert));
    		}
    		else{
    		echo json_encode(array("status" => FALSE));
    		}
	}

	public function ajax_update($id)
	{
    		if(
    				$this->input->post('judul') != "" && 
					$this->input->post('size') != ""
    				){
    				    		    
    				    
    		$data = array(
    				'judul' => $this->input->post('judul'),
					'size' => $this->input->post('size')
    			);
    		$this->dokumen->update(array('id' => $id), $data, "dokumen");
    
    		echo json_encode(array("status" => TRUE));	
    		}
    		else{
    		echo json_encode(array("status" => FALSE));
    		}
	}
		
	
}


