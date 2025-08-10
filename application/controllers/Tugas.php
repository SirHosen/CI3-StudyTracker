<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    public function index()
    {
        $this->load->view('tugas/index');
    }

    public function add()
    {
        $this->load->view('tugas/add');
    }

    public function edit($id)
    {
        $data['id'] = $id;
        $this->load->view('tugas/edit', $data);
    }

    public function show($id)
    {
        $data['id'] = $id;
        $this->load->view('tugas/show', $data);
    }
}
