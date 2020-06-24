<?php 
class Genres_m extends CI_Model{
		public function get_all(){
			return $this->db->get('genres')->result();

		}
		
		public function get_genres_keyword($keyword){
			$this->db->select('*');
			$this->db->from('genres');
			$this->db->like('gen_id',$keyword);
			$this->db->or_like('gen_title',$keyword);
			return $this->db->get()->result();

		}

	}

	?>