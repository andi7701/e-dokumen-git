<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai_model extends CI_Model {

	var $table = 'akun';
	var $column_order = array('nip','nama',null); //set column field database for datatable orderable
	var $column_search = array('nip','nama'); //set column field database for datatable searchable just firstname , lastname , address are searchable
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

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		
		$this->db->where('level','user');
		
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		
		$this->db->where('level','user');

		
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		
		$this->db->where('level','user');
		
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


	public function color($kategori) {
	  switch ($kategori) {
		case '5':
		  return '#d70202';
		case '4':
		  return '#df6f0c';
		case '3':
		  return '#ddb335';
		case '2':
		  return '#94ca00';
		case '1':
		  return '#2da800';
		default:
		  return '#FFFFFF';
	  }
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
	

	public function rupiah($angka){
	
	$hasil_rupiah = number_format($angka,2,',','.');
	return $hasil_rupiah;
	}



	public function bulanIndo($bulanAngka) {
	  switch ($bulanAngka) {
		case '1':
		  return 'Januari';
		case '2':
		  return 'Februari';
		case '3':
		  return 'Maret';
		case '4':
		  return 'April';
		case '5':
		  return 'Mei';
		case '6':
		  return 'Juni';
		case '7':
		  return 'Juli';
		case '8':
		  return 'Agustus';
		case '9':
		  return 'September';
		case '10':
		  return 'Oktober';
		case '11':
		  return 'November';
		case '12':
		  return 'Desember';
		default:
		  return 'bulan tidak valid';
	  }
	}	
	
}
