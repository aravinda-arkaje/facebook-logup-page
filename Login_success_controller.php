<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_success_controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function index()
	{	
		$this->load->view('/login_success');
	}

	public function logout()
	{
		$this->session->unset_userdata(array(
				'username'=>'',
				'password'=>'',
			));
		$this->session->sess_destroy();
		redirect('/register');			
	}

}

?>
