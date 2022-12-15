<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') != "admin"){
			redirect(base_url('auth'));
		}
		$this->load->model('Unor_model','unor');
	}

	
	public function index()
	{
		$this->load->view('unor');
	}
	


	public function add()
	{
    		$this->load->view('unor_add');
	}
	
	public function edit()
	{
		if($this->session->userdata('level') == "admin"){
    		$this->load->view('unor_edit');
		}
	}

	
	public function ajax_list()
	{
		$list = $this->unor->get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		
		foreach ($list as $unor) {
			$no++;
			$row = array();
			
			$row[] = $no;
			$row[] = $unor->opd;

        	$row[] = '<a href="'.base_url("unor/edit").'/'.$unor->id.'" class="pull-center btn btn-info">Edit</a> <a class="btn btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_unit('."'".$unor->id."'".')">Delete</a>';			
        		

			$data[] = $row;
		}
		
		

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->unor->count_all(),
						"recordsFiltered" => $this->unor->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}		
	
	
	public function ajax_delete($id)
	{
    		$this->unor->delete_by_id("id",$id,"unor");
    		echo json_encode(array("status" => TRUE));
	}
	

	public function ajax_add()
	{
    		if(
    				$this->input->post('opd') != ""
    				){
    				    
            
    		$data = array(
    				'opd' => $this->input->post('opd')
    			);
    			
    		$insert = $this->unor->save($data, "unor");
    		
    		echo json_encode(array("status" => TRUE, "id" => $insert));
    		}
    		else{
    		echo json_encode(array("status" => FALSE));
    		}
	}

	public function ajax_update($id)
	{
    		if(
    				$this->input->post('opd') != ""
    				){
    				    		    
    				    
    		$data = array(
    				'opd' => $this->input->post('opd')
    			);
    		$this->unor->update(array('id' => $id), $data, "unor");
    
    		echo json_encode(array("status" => TRUE));	
    		}
    		else{
    		echo json_encode(array("status" => FALSE));
    		}
	}
		
	
}


