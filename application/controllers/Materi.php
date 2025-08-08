<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller{
	public function index(){
		$this->load->view('materi/index');
	}

	public function add(){
		$this->load->view('materi/add');
	}

	public function edit(){
		$data['id'] = $id;
		$this->load->view('materi/edit', $data);
	}

	public function show(){
		$data['id'] = $id;
		$this->load->view('materi/show', $data);
	}
}
