<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moviegenres extends CI_Controller {

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
	 // { 
  //   if ($this->session->userdata('Admin'))
  {
    $data2['movgen']=$this->db->get('movie_genres');
    $data['isi'] = $this->load->view('auth/movie_genres_view',$data2,TRUE);
    $this->load->view('auth/admin_view',$data);
  } 
  
}
