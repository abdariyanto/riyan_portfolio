<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller 
{
	public function index()
	{
		
		$this->load->view('auth/registrasi_view');
		
		
		

	}
	public function regis()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[5]');
		
			

		if($this->form_validation->run() == true) {
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			

			$this->db->where('name', $name);
			$cek_insert=$this->db->get('user');

			
		if($cek_insert->num_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert-danger">already exists</div>');
				redirect('registrasi/regis');
			}

		else{
				$insert_data = array(
									'name'=> $name,
									'email'=> $email,
									'password'=> $password
								     );

				$cek_insert=$this->db->insert('user' , $insert_data);
				redirect(base_url().'login');
			}
		}else {
				
				$this->load->view('auth/registrasi_view');
						
		}
	}
}

