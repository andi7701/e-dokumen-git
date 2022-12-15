<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function mitra(){
		$this->load->view('masuk_mitra');
	}
	
	public function customer(){
		$this->load->view('masuk_customer');
	}

}
