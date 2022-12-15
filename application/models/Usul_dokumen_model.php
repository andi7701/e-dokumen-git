<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usul_dokumen_model extends CI_Model {

	var $table = 'berkas_dokumen';
	var $column_order = array('nip','nama','opd','judul_dokumen','status',null); //set column field database for datatable orderable
	var $column_search = array('nip','nama','opd','judul_dokumen','status'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('berkas_dokumen.status' => 'asc'); // default order 


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	      
	private function _get_datatables_query()
	{	
		$this->db->select('
				berkas_dokumen.id,
				berkas_dokumen.file,
				berkas_dokumen.judul_berkas,
				berkas_dokumen.status,
				akun.nip,
				akun.nama,
				unor.opd,
			');
		$this->db->from('berkas_dokumen');	
		$this->db->join('akun','berkas_dokumen.id_akun = akun.id');
		$this->db->join('dokumen','berkas_dokumen.id_dokumen = dokumen.id');
		$this->db->join('unor', 'akun.id_unor = unor.id');
		
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		
		$this->db->where('berkas_dokumen.status', 'diproses');
		$this->db->or_where('berkas_dokumen.status', 'diupdate');
		
		
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		
		$this->db->where('berkas_dokumen.status', 'diproses');
		$this->db->or_where('berkas_dokumen.status', 'diupdate');

		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);

		$this->db->where('berkas_dokumen.status', 'diproses');
		$this->db->or_where('berkas_dokumen.status', 'diupdate');
		
		
		return $this->db->count_all_results();
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

	public function get_all($filter)
	{
		// print_r($filter);
		$check   = $filter['filter'];
		$opd     = $filter['opd'];
		$dokumen  = $filter['dokumen'];
		// $nip_nama= $filter['nip_nama'];

		$this->db->select('
				berkas_dokumen.id,
				akun.nip,
				akun.nama,
				unor.opd,
				dokumen.judul,
				berkas_dokumen.file,
				berkas_dokumen.status,
			');
		$this->db->from($this->table);	
		$this->db->join('akun','berkas_dokumen.id_akun = akun.id');
		$this->db->join('dokumen','berkas_dokumen.id_dokumen = dokumen.id');
		$this->db->join('unor', 'akun.id_unor = unor.id');
		$this->db->where('(berkas_dokumen.status="diproses" OR berkas_dokumen.status="diupdate")');

		if(isset($check))
		{
			if($opd){
				$this->db->where('unor.id', $opd);
			}
			if($dokumen){
				$this->db->where('dokumen.id',$dokumen);
			}
			// if($nip_nama){
			// 	$this->db->like('akun.nip', $nip_nama);
			// 	$this->db->or_like('akun.nama', $nip_nama);
			// 	$this->db->where('(berkas_dokumen.status="diproses" OR berkas_dokumen.status="diupdate")');
			// }	
		}
		
		
		
		return $this->db->get();
		// return $query->result();
	}

	
}
