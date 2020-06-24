 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excelactor extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('model_actor');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
 
           $data = array( 'title' => 'Data Actor',
                'actor' => $this->model_actor->getAll());
 
           $this->load->view('auth/vw_excel',$data);
      }
 
      //export ke dalam format excel
      public function export_excel(){
        
           $data = array( 'title' => 'Laporan Excel ',
                'actor' => $this->model_actor->getAll());
 
           $this->load->view('auth/vw_laporan_excel',$data);
      }
 
 }