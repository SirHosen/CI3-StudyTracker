<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	//Halaman Login 
	public function login_page (){
		$this->load->view('auth/login_page');
	}

	//Halaman Register
	public function register_form(){
		$this->load->view('auth/register_form');
	}

	//Fungsi Daftar
	public function register(){
		$this->load->model('User');

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password_input = $this->input->post('password');
		
		if(empty($name) || empty($email) || empty($password_input)){
			$this->session->set_flashdata('error', 'Semua field wajib diisi');
			redirect('auth/register_form');
		}

		$password = password_hash ($this->input->post('password'), PASSWORD_DEFAULT);

		$data = [
			'name' => $name,
			'email' => $email,
			'password' => $password
		];

		$this->User->insert_user($data);
		redirect('auth/login_page');
	}

	//Fungsi Login
	public function login(){
		$this->load->model('User');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->User->get_user_by_email($email);

		if ($user && password_verify ($password, $user->password)){
			$this->session->set_userdata([
			'user_id' => $user->id,
			'user_name' => $user->name,
			'logged_in' => TRUE
			]);	
			redirect('dashboard');		
		} else {
			$this->session->set_flashdata('error', 'Email atau password salah');
			redirect('auth/login');
		}
	}
}
