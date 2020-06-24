<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

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
    
    $this->load->model('Biodata_m');
	}



	public function index()
	{
		$nim =$this->input->get('nim',TRUE);
		$this->db->where('nim', $nim);
		$data['editkan']=$this->db->get('biodata');

		$data2['title']='Add';
		$data1['isi'] = $this->load->view('auth/edit_view', $data ,true);
		
		$this->load->view('auth/admin_view', $data1);

	}



	public function ubah()
	{
			$this->form_validation->set_rules('nim','Nim','required');
			$this->form_validation->set_rules('nama','Nama','required|trim');
			$this->form_validation->set_rules('alamat','Alamat','required');
			$this->form_validation->set_rules('jurusan','Jurusan','required');

			$nim = $this->input->post('nim');
		if($this->form_validation->run() == true){
			
			$nama= $this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$jurusan=$this->input->post('jurusan');

			$data = array(
				'nim' =>$nim, 
				'nama' =>$nama,
				'alamat'=>$alamat,
				'jurusan'=>$jurusan );

			$this->db->where('nim', $nim);
			$this->db->update('biodata', $data);
			redirect('tables');
			
		}
		else{

		$this->db->where('nim', $nim);
		$data['editkan']=$this->db->get('biodata');
			$data['title']='ubah';
			$data1['isi'] = $this->load->view('auth/edit_view', $data ,true);
		
				$this->load->view('auth/admin_view', $data1);

			}
	}
	public function add()
	{
		$this->form_validation->set_rules('nim','Nim','required');
		$this->form_validation->set_rules('nama','Name','required|trim');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('jurusan','Jurusan','required');
			

		if($this->form_validation->run() == true) {
			$nim=$this->input->post('nim');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$jurusan=$this->input->post('jurusan');

			$this->db->where('nim', $nim);
			$cek_insert=$this->db->get('biodata');

			
		if($cek_insert->num_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert-danger">Nim already exists</div>');
				redirect('edit/add');
			}

		else{
				$insert_data = array('nim'=> $nim,'nama'=> $nama,'alamat'=> $alamat,'jurusan'=> $jurusan);
				$cek_insert=$this->db->insert('biodata' , $insert_data);
				redirect(base_url().'tables');
			}
		}else {
				$data['title']='Add';
				$data1['isi'] = $this->load->view('auth/add_view', $data ,true);
		
				$this->load->view('auth/admin_view', $data1);
		}
	}

	

	public function delete()
	{

		 $nim=$this->input->get('nim', TRUE);
				$this->db->where('nim', $nim);
				$this->db->delete('biodata');
				redirect('tables');
	}



	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['bio']=$this->Biodata_m->get_biodata_keyword($keyword);
	
		$data['title']='Search';
		$data1['isi'] = $this->load->view('auth/tablesbiodatasearch_view', $data ,true);
		
		$this->load->view('auth/admin_view', $data1);



	}
}
