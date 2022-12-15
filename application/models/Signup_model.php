<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function save($data, $table)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}


}
