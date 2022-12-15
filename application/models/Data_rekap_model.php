<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_rekap_model extends CI_Model {

	var $table = 'berkas_dokumen';
	var $column_order = array('nip','nama','opd','judul_dokumen','status',null); //set column field database for datatable orderable
	var $column_search = array('nip','nama','opd','judul_dokumen','status'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('berkas_dokumen.id' => 'asc'); // default order 


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
      
	private function _get_datatables_query()
	{
		
		//query('SELECT * FROM m_mitra JOIN m_kota ON m_mitra.kd_kota = m_kota.kd_kota');
		$this->db->select('
				berkas_dokumen.id,
				dokumen.judul,
				berkas_dokumen.status,
				akun.nip,
				akun.nama,
				unor.opd,
			');
		$this->db->from($this->table);	
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
		
	

		$this->db->where('status','diproses');
		// $this->db->where('status')
		
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		
		$this->db->where('status','diproses');

		
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		
		$this->db->where('status','diproses');
		
		return $this->db->count_all_results();
	}


	public function get_all($filter)
	{
		// print_r($filter);
		$check   = $filter['filter'];
		$opd     = $filter['opd'];
		$status  = $filter['status'];
		$nip_nama= $filter['nip_nama'];

		$this->db->select('
				akun.nip,
				akun.nama,
				unor.opd,
				dokumen.judul,
				berkas_dokumen.status,
			');
		$this->db->from($this->table);	
		$this->db->join('akun','berkas_dokumen.id_akun = akun.id');
		$this->db->join('dokumen','berkas_dokumen.id_dokumen = dokumen.id');
		$this->db->join('unor', 'akun.id_unor = unor.id');
		$this->db->where('(berkas_dokumen.status="diproses" OR berkas_dokumen.status="diupdate")');


		if(isset($filter))
		{
			if($opd){
				$this->db->where('unor.id', $opd);
			}
			if($status){
				$this->db->where('berkas_dokumen.status',$status);
			}
			if($nip_nama){
				$this->db->like('akun.nip', $nip_nama);
				$this->db->or_like('akun.nama', $nip_nama);
			}	
		}
		
		return $this->db->get();
		// return $query->result();
	}

	public function excel()
	{
		$this->db->select('
				akun.nip,
				akun.nama,
				unor.opd,
				dokumen.judul,
				berkas_dokumen.status,
			');
		$this->db->from($this->table);	
		$this->db->join('akun','berkas_dokumen.id_akun = akun.id');
		$this->db->join('dokumen','berkas_dokumen.id_dokumen = dokumen.id');
		$this->db->join('unor', 'akun.id_unor = unor.id');
		$this->db->where('(berkas_dokumen.status="diproses" OR berkas_dokumen.status="diupdate")');
		return $this->db->get();
		// return $query->result();
	}


	
	
}
