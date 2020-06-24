<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actor extends CI_Controller {


     public function __construct()
    {
        parent::__construct();
 
        // load Pagination library
        $this->load->library('pagination');
         
        // load URL helper
        $this->load->helper('url');
    }
      
    public function index() 
    {
        // load db and model
        $this->load->database();
        $this->load->model('Actor_m');
 
        // init params
        $params = array();
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->Actor_m->get_total();
 
        if ($total_records > 0) 
        {
            // get current page records
            $params["results"] = $this->Actor_m->get_current_page_records($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'actor/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            $config['next_link'] = 'Selanjutnya';
            $config['prev_link'] = 'Sebelumnya';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_open'] = '<li>';
             
            $this->pagination->initialize($config);
             
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
         
        $data['isi']=$this->load->view('auth/actor_view',$params, true); 
        $this->load->view('auth/admin_view', $data);
    }
}
 
     