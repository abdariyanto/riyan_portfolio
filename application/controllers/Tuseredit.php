<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuseredit extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Userlogin_m');
	}

	public function index()
	{
		$id =$this->input->get('id',TRUE);
		$this->db->where('id', $id);
		$data['useredit']=$this->db->get('user');

		$data2['title']='Add';
		$data1['isi'] = $this->load->view('auth/useredit_view', $data ,true);
		
		$this->load->view('auth/admin_view', $data1);

	}



	public function ubah()
	{
			$this->form_validation->set_rules('id','id','required');
			$this->form_validation->set_rules('name','name','required|trim');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('password','password','required');

			$act_id = $this->input->post('id');
		if($this->form_validation->run() == true){
			
			$act_fname= $this->input->post('name');
			$act_lname=$this->input->post('email');
			$act_gender=$this->input->post('password');

			$data = array(
				'name' =>$name, 
				'email' =>$email,
				'password'=>$password,
				);

			$this->db->where('id', $id);
			$this->db->update('user', $data);
			redirect('tablesuser');
			
		}
		else{

			$this->db->where('id', $id);
			$data['useredit']=$this->db->get('user');
			$data['title']='ubah';
			$data1['isi'] = $this->load->view('auth/useredit_view', $data ,true);
		
			$this->load->view('auth/admin_view', $data1);

			}
	}
	

	public function delete()
	{

		 $id=$this->input->get('id', TRUE);
				$this->db->where('id', $id);
				$this->db->delete('user');
				redirect('tablesuser');
	}


	public function search()
	{	
		$keyword = $this->input->post('keyword');
		$data['user']=$this->Userlogin_m->get_user_keyword($keyword);
	
		$data['title']='Search';
		$data1['isi'] = $this->load->view('auth/usersearch_view', $data ,true);
		
		$this->load->view('auth/admin_view', $data1);
	}



}
