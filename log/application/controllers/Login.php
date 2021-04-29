<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

	public function index()
	{
		$this->form_validation->set_rules('username' , 'Username', 'required');
		$this->form_validation->set_rules('password' , 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('login');
		}else{
			$this->ceklogin();
		}
	}

	//panggil fungsi cek login

	public function ceklogin(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->model_login->ambillogin($username, $password);

		/*$cek_admin = $this->model_login->ambillogin($username, $password);
		$this->load->model('model_login');

		if($username == "admin" && $password == "admin"){
			redirect('adminberanda');
		}else{
			redirect('userberanda');
		}*/
	}
	public function logout(){
		$this->model_login->security();
	}
}

 ?>
