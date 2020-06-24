<?php 
	class Biodata_m extends CI_Model{
		public function get_all(){
			return $this->db->get('biodata')->result();
		}

		public function get_biodata_keyword($keyword){
			$this->db->select('*');
			$this->db->from('biodata');
			$this->db->like('nim',$keyword);
			$this->db->or_like('nama',$keyword);
			$this->db->or_like('alamat',$keyword);
			$this->db->or_like('jurusan',$keyword);
			return $this->db->get()->result();
		}




	}

	?>
