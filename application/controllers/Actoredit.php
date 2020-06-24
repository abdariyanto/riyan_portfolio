<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actoredit extends CI_Controller {

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
    
    $this->load->model('Actor_m');
	}

	public function index()
	{
		$act_id =$this->input->get('act_id',TRUE);
		$this->db->where('act_id', $act_id);
		$data['edittor']=$this->db->get('actor');

		$data2['title']='Add';
		$data1['isi'] = $this->load->view('auth/actoredit_view', $data ,true);
		
		$this->load->view('auth/admin_view', $data1);

	}


	public function ubah()
	{
			$this->form_validation->set_rules('act_id','Act_id','required');
			$this->form_validation->set_rules('act_fname','Act_fname','required|trim');
			$this->form_validation->set_rules('act_lname','Act_lname','required');
			$this->form_validation->set_rules('act_gender','Act_gender','required');

			$act_id = $this->input->post('act_id');
		if($this->form_validation->run() == true){
			
			$act_fname= $this->input->post('act_fname');
			$act_lname=$this->input->post('act_lname');
			$act_gender=$this->input->post('act_gender');

			$data = array(
				'act_id' =>$act_id, 
				'act_fname' =>$act_fname,
				'act_lname'=>$act_lname,
				'act_gender'=>$act_gender);

			$this->db->where('act_id', $act_id);
			$this->db->update('actor', $data);
			redirect('actor');
			
		}
		else{

		$this->db->where('act_id', $act_id);
		$data['edittor']=$this->db->get('actor');
			$data['title']='ubah';
			$data1['isi'] = $this->load->view('auth/actoredit_view', $data ,true);
		
				$this->load->view('auth/admin_view', $data1);

			}
	}
	public function add()
	{
		$this->form_validation->set_rules('act_id','Act_id','required');
		$this->form_validation->set_rules('act_fname','Act_fname','required|trim');
		$this->form_validation->set_rules('act_lname','Act_lname','required');
		$this->form_validation->set_rules('act_gender','Act_gender','required');
			

		if($this->form_validation->run() == true) {
			$act_id=$this->input->post('act_id');
			$act_fname=$this->input->post('act_fname');
			$act_lname=$this->input->post('act_lname');
			$act_gender=$this->input->post('act_gender');

			$this->db->where('act_id', $act_id);
			$cek_insert=$this->db->get('actor');

			
		if($cek_insert->num_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert-danger">Id already exists</div>');
				redirect('actoredit/add');
			}

		else{
				$insert_data = array('act_id'=> $act_id,'act_fname'=> $act_fname,'act_lname'=> $act_lname,'act_gender'=> $act_gender);
				$cek_insert=$this->db->insert('actor' , $insert_data);
				redirect(base_url().'actor');
			}
		}else {
				$data['title']='Add';
				$data1['isi'] = $this->load->view('auth/actoradd_view', $data ,true);
		
				$this->load->view('auth/admin_view', $data1);
		}
	}

	

	public function delete()
	{

		 $act_id=$this->input->get('act_id', TRUE);
				$this->db->where('act_id', $act_id);
				$this->db->delete('actor');
				redirect('actor');
	}


	public function search()
	{	
		$keyword = $this->input->post('keyword');
		$data['actor']=$this->Actor_m->get_actor_keyword($keyword);
	
		$data['title']='Search';
		$data1['isi'] = $this->load->view('auth/actorsearch_view', $data ,true);
		
		$this->load->view('auth/admin_view', $data1);
	}



}
