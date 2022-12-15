<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atur_jadwal_model extends CI_Model {

	var $table = 'tanggal';
	var $column_order = array('tanggal','keterangan',null); //set column field database for datatable orderable
	var $column_search = array('tanggal','keterangan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id' => 'asc'); // default order 


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		//query('SELECT * FROM m_mitra JOIN m_kota ON m_mitra.kd_kota = m_kota.kd_kota');
		
		$this->db->from($this->table);

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

	function get_datatables($id)
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		
		
		$this->db->where('id_bulan',$id);
		


		
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered($id)
	{
		$this->_get_datatables_query();
		

		$this->db->where('id_bulan',$id);

		
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all($id)
	{
		$this->db->from($this->table);
		

		$this->db->where('id_bulan',$id);		
		
		return $this->db->count_all_results();
	}


	
	public function update($where, $data,$table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}		
	

	public function hariIndo($hariInggris) {
	  switch ($hariInggris) {
		case 'Sunday':
		  return 'Minggu';
		case 'Monday':
		  return 'Senin';
		case 'Tuesday':
		  return 'Selasa';
		case 'Wednesday':
		  return 'Rabu';
		case 'Thursday':
		  return 'Kamis';
		case 'Friday':
		  return 'Jumat';
		case 'Saturday':
		  return 'Sabtu';
		default:
		  return 'hari tidak valid';
	  }
	}	
	

	public function bulanIndo($bulanInggris) {
	  switch ($bulanInggris) {
		case 'January':
		  return 'Januari';
		case 'February':
		  return 'Februari';
		case 'March':
		  return 'Maret';
		case 'April':
		  return 'April';
		case 'May':
		  return 'Mei';
		case 'June':
		  return 'Juni';
		case 'July':
		  return 'Juli';
		case 'August':
		  return 'Agustus';
		case 'September':
		  return 'September';
		case 'October':
		  return 'Oktober';
		case 'November':
		  return 'November';
		case 'December':
		  return 'Desember';
		default:
		  return 'bulan tidak valid';
	  }
	}	
	
}
