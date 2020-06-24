<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{	
		
		if($this->session->userdata('login')!=TRUE){
			$this->load->view('auth/login_view');
		}else{
			redirect(base_url().'admin');
		}
	
	}
	

	public function logincheck()
	{

		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]');

		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));


		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$cek_db = $this->db->get('user');

		if($cek_db->num_rows() >0){
			$this->session->set_userdata('login', true);
			$this->session->set_userdata('name',$cek_db->row()->name);

			$data['title']='Alfian Niranda';
			$data1['isi'] = $this->load->view('auth/dash_view', $data ,true);
		
			$this->load->view('auth/admin_view', $data1);
		}else 
			redirect(base_url(). 'login');
	
	}


	public function logout()
	{
		session_destroy();
		redirect('login');
	}

}


