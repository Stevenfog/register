 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

	public function index()
	{
    $this->form_validation->set_rules('nik' , 'NIK', 'required|is_unique[user.nik]', ['is_unique' => 'This NIK has already registered!']);
		$this->form_validation->set_rules('username' , 'Username', 'required|callback_check_username_exists');
		$this->form_validation->set_rules('password' , 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('email' , 'Email', 'required|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already registered!']);
		$this->form_validation->set_rules('kontak' , 'Kontak Pribadi', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('signup');
		}else{

			$this->user_model->register();

			$this->session->set_flashdata('user_registered','You are now registered');

			$this->load->view('login');
		}
	}

	function check_username_exists($username){
		$this->form_validation->set_message('check_username_exists','That username is taken, Please choose a different one');
		if($this->user_model->check_username_exists($username)){
			return true;
		}else{
			return false;
		}
	}

	function check_email_exists($email){
		$this->form_validation->set_message('check_email_exists','That email is taken, Please choose a different one');
		if($this->user_model->check_email_exists($email)){
			return true;
		}else{
			return false;
		}
	}



 }

 ?>
