<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Progress extends CI_Controller {

    public function index()
    {
        $this->load->view('progress/index');
    }

    public function add()
    {
        $this->load->view('progress/add');
    }
}
