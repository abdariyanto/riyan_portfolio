<?php 
	class Userlogin_m extends CI_Model
	{
		public function get_all(){
			return $this->db->get('user')->result();
		}

		public function get_user_keyword($keyword){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->like('id',$keyword);
			$this->db->or_like('name',$keyword);
			$this->db->or_like('email',$keyword);
			$this->db->or_like('password',$keyword);
			return $this->db->get()->result();
		}

	}

	?>
