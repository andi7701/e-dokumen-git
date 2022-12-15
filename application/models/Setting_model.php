<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	public function update($where, $data, $table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}
	
}
