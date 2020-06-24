<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genresedit extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct(){
    parent::__construct();
    
    $this->load->model('Genres_m');
	}

	public function index()
	{
		$gen_id =$this->input->get('gen_id',TRUE);
		$this->db->where('gen_id', $gen_id);
		$data['genedit']=$this->db->get('genres');

		$data2['title']='Add';
		$data1['isi'] = $this->load->view('auth/genresedit_view', $data ,true);
		
		$this->load->view('auth/admin_view', $data1);

	}



	public function ubah()
	{
			$this->form_validation->set_rules('gen_id','Gen_id','required');
			$this->form_validation->set_rules('gen_title','Gen_title','required|trim');

			$gen_id = $this->input->post('gen_id');
		if($this->form_validation->run() == true){
			
			$gen_title=$this->input->post('gen_title');
			
			$data = array(
				'gen_id' =>$gen_id, 
				'gen_title' =>$gen_title);
				

			$this->db->where('gen_id', $gen_id);
			$this->db->update('genres', $data);
			redirect('genres');
			
		}
		else{

		$this->db->where('gen_id', $gen_id);
		$data['genedit']=$this->db->get('genres');
			$data['title']='ubah';
			$data1['isi'] = $this->load->view('auth/genresedit_view', $data ,true);
		
				$this->load->view('auth/admin_view', $data1);

			}
	}
	public function add()
	{
		$this->form_validation->set_rules('gen_id','Gen_id','required');
		$this->form_validation->set_rules('gen_title','Gen_title','required|trim');
		

		if($this->form_validation->run() == true) {
			$gen_id=$this->input->post('gen_id');
			$gen_title=$this->input->post('gen_title');
			
			$this->db->where('gen_id', $gen_id);
			$cek_insert=$this->db->get('genres');

			
		if($cek_insert->num_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert-danger">Id already exists</div>');
				redirect('genresedit/add');
			}

		else{
				$insert_data = array(
					'gen_id'=> $gen_id,
					'gen_title'=> $gen_title);

				$cek_insert=$this->db->insert('genres' , $insert_data);
				redirect(base_url().'genres');
			}
		}else {
				$data['title']='Add';
				$data1['isi'] = $this->load->view('auth/genresadd_view', $data ,true);
		
				$this->load->view('auth/admin_view', $data1);
		}
	}

	

	public function delete()
	{

		 $gen_id=$this->input->get('gen_id', TRUE);
				$this->db->where('gen_id', $gen_id);
				$this->db->delete('genres');
				redirect('genres');
	}


	public function search()
	{	
		$keyword = $this->input->post('keyword');
		$data['genres']=$this->Genres_m->get_genres_keyword($keyword);
	
		$data['title']='Search';
		$data1['isi'] = $this->load->view('auth/genressearch_view', $data ,true);
		
		$this->load->view('auth/admin_view', $data1);
	}



}




