<?php 
	class Actor_m extends CI_Model{


		 function __construct() 
   		 {
     	 parent::__construct();
   		 }

		public function get_all(){
			return $this->db->get('actor')->result();
		}

		public function get_actor_keyword($keyword){
			$this->db->select('*');
			$this->db->from('actor');
			$this->db->like('act_id',$keyword);
			$this->db->or_like('act_fname',$keyword);
			$this->db->or_like('act_lname',$keyword);
			$this->db->or_like('act_gender',$keyword);
			return $this->db->get()->result();
		}

    public function get_search($keyword){
      $this->db->select('*');
      $this->db->from('actor');
      $this->db->where('act_id',$keyword);
      $this->db->where('act_fname',$keyword);
      $this->db->where('act_lname',$keyword);
      $this->db->where('act_gender',$keyword);
      return $this->db->get()->result();

    }



		public function get_current_page_records($limit, $start) 
    	{
        $this->db->limit($limit, $start);
        $query = $this->db->get("actor");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
   		 }
     
    	public function get_total() 
   		 {
        return $this->db->count_all("actor");
   		 }

}

	




   
 
   






