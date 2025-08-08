<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index(){
        if (!$this->session->userdata('logged_in')){
            redirect('auth/login_page');
        }
        
        $data['title'] = '|Dashboard|';
        
        // kirim data ke view
        $this->load->view('dashboard/index', $data);
    }
}
