<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas_dokumen_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_id($id){
		$this->db->where('id', $id);
		return $this->db->get('berkas_dokumen');
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
	
	public function update_status($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('berkas_dokumen', $data);
	}

	public function update_status_tolak($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('berkas_dokumen', $data);
	}

	public function get_id_akun($id)
	{
		$this->db->select('id_akun');
		$this->db->from('berkas_dokumen');
		$this->db->where('id', $id);
		$res = $this->db->get('')->result();
		return $res[0]->id_akun;
	}

	
}
