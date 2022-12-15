<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function save($data,$table)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function delete_by_id($primary,$id,$table)
	{
		$this->db->where($primary, $id);
		$this->db->delete($table);
	}
	
	public function update($where, $data,$table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}

	
}
