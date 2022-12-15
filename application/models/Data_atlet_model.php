<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_atlet_model extends CI_Model {

	var $table = 'atlet';
	var $column_order = array('nama','jenis_kelamin','tinggi_badan','berat_badan','tinggi_duduk','rentang_lengan','kecepatan','kelincahan','koordinasi','kekuatan','power','daya_tahan','nilai_potensi',null); //set column field database for datatable orderable
	var $column_search = array('nama','jenis_kelamin','tinggi_badan','berat_badan','tinggi_duduk','rentang_lengan','kecepatan','kelincahan','koordinasi','kekuatan','power','daya_tahan','nilai_potensi'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('atlet.id' => 'asc'); // default order 


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	
    function get_cabang(){
        $hasil=$this->db->query("SELECT * FROM kategori");
        return $hasil;
    }
    
    function get_atlet($id){
        
        $tanpa_cabang = 0;
        
        if($id == 0){
            $id = 4;
            $tanpa_cabang = 1;
        }
        
        
		$this->db->select('*');
		$this->db->where('id',$id);
		$akuns = $this->db->get('kategori');
													
		foreach($akuns->result() as $rows){
		    $kategori_kecepatan = $rows->kecepatan;
            $kategori_kelincahan = $rows->kelincahan;
            $kategori_koordinasi = $rows->koordinasi;
            $kategori_kekuatan = $rows->kekuatan;
            $kategori_power = $rows->power;
            $kategori_daya_tahan = $rows->daya_tahan; 
		}
        
        
		$this->db->select('kecepatan');
		$this->db->where('kategori',$kategori_kecepatan);
		$this->db->where('jenis_kelamin','Laki-Laki');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $kecepatan_l = $rows->kecepatan;
		}
		
		$this->db->select('kecepatan');
		$this->db->where('kategori',$kategori_kecepatan);
		$this->db->where('jenis_kelamin','Perempuan');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $kecepatan_p = $rows->kecepatan;
		}
                
        
        
        
		$this->db->select('kelincahan');
		$this->db->where('kategori',$kategori_kelincahan);
		$this->db->where('jenis_kelamin','Laki-Laki');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $kelincahan_l = $rows->kelincahan;
		}
		
		$this->db->select('kelincahan');
		$this->db->where('kategori',$kategori_kelincahan);
		$this->db->where('jenis_kelamin','Perempuan');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $kelincahan_p = $rows->kelincahan;
		}
                
                
        
        
		$this->db->select('koordinasi');
		$this->db->where('kategori',$kategori_koordinasi);
		$this->db->where('jenis_kelamin','Laki-Laki');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $koordinasi_l = $rows->koordinasi;
		}
		
		$this->db->select('koordinasi');
		$this->db->where('kategori',$kategori_koordinasi);
		$this->db->where('jenis_kelamin','Perempuan');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $koordinasi_p = $rows->koordinasi;
		}
                
                
        
        
		$this->db->select('kekuatan');
		$this->db->where('kategori',$kategori_kekuatan);
		$this->db->where('jenis_kelamin','Laki-Laki');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $kekuatan_l = $rows->kekuatan;
		}
		
		$this->db->select('kekuatan');
		$this->db->where('kategori',$kategori_kekuatan);
		$this->db->where('jenis_kelamin','Perempuan');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $kekuatan_p = $rows->kekuatan;
		}
                
        
        
		$this->db->select('power');
		$this->db->where('kategori',$kategori_power);
		$this->db->where('jenis_kelamin','Laki-Laki');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $power_l = $rows->power;
		}
		
		$this->db->select('power');
		$this->db->where('kategori',$kategori_power);
		$this->db->where('jenis_kelamin','Perempuan');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $power_p = $rows->power;
		}
                
                        
        
        
		$this->db->select('daya_tahan');
		$this->db->where('kategori',$kategori_daya_tahan);
		$this->db->where('jenis_kelamin','Laki-Laki');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $daya_tahan_l = $rows->daya_tahan;
		}
		
		$this->db->select('daya_tahan');
		$this->db->where('kategori',$kategori_daya_tahan);
		$this->db->where('jenis_kelamin','Perempuan');
		$akuns = $this->db->get('norma');
													
		foreach($akuns->result() as $rows){
		    $daya_tahan_p = $rows->daya_tahan;
		}
                
                
        
        $id_user = $this->session->userdata('id');
        
        
        if($tanpa_cabang == 0){
        
        
            $hasil=$this->db->query("SELECT * FROM atlet WHERE 
            ((kecepatan <= '$kecepatan_l' AND 
            kelincahan <= '$kelincahan_l' AND 
            koordinasi >= '$koordinasi_l' AND 
            kekuatan >= '$kekuatan_l' AND
            power >= '$power_l' AND 
            daya_tahan >= '$daya_tahan_l' AND
            jenis_kelamin = 'Laki-Laki')
            OR
            (kecepatan <= '$kecepatan_p' AND 
            kelincahan <= '$kelincahan_p' AND 
            koordinasi >= '$koordinasi_p' AND 
            kekuatan >= '$kekuatan_p' AND
            power >= '$power_p' AND 
            daya_tahan >= '$daya_tahan_p' AND
            jenis_kelamin = 'Perempuan'))  
            AND
            id_user = '$id_user'
            ");
            
            
        }else{
        
        
            $hasil=$this->db->query("SELECT * FROM atlet WHERE 
            (((kecepatan > '$kecepatan_l' OR 
            kelincahan > '$kelincahan_l' OR 
            koordinasi < '$koordinasi_l' OR 
            kekuatan < '$kekuatan_l' OR
            power < '$power_l' OR 
            daya_tahan < '$daya_tahan_l') AND
            jenis_kelamin = 'Laki-Laki')
            OR
            ((kecepatan > '$kecepatan_p' OR 
            kelincahan > '$kelincahan_p' OR 
            koordinasi < '$koordinasi_p' OR 
            kekuatan < '$kekuatan_p' OR
            power < '$power_p' OR 
            daya_tahan < '$daya_tahan_p') AND
            jenis_kelamin = 'Perempuan'))  
            AND
            id_user = '$id_user'
            ");
        }
        
        
        return $hasil->result();
    }
    
    public function getAll() {
		    $this->db->select('*');
		    $this->db->where('id_user',$this->session->userdata('id'));
            $this->db->from($this->table);
            $query = $this->db->get();
            return $query->result();
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
		
		$this->db->where('id_user',$this->session->userdata('id'));
		
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		
		$this->db->where('id_user',$this->session->userdata('id'));

		
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		
		$this->db->where('id_user',$this->session->userdata('id'));
		
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
