<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_success extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function index()
	{	
		    $mail = $this->session->userdata('email');

		    $this->load->library('email');  
		    $user_name = "tsets";
		    $user_email = $mail;
		    $subject = 'registration success';
		    $body = 'hello , this is just a project checking conformation mail , dont worry ';
		    $outlook_account_username = 'example@outlook.com';            
		    $outlook_account_password = '*******';                  
		    $subject                  = 'User Login Verification:';                      
		    $config['smtp_crypto']    = 'tls';            
		    $config['protocol']       = 'smtp';            
		    $config['smtp_host']      = 'smtp.live.com';
		    // $config['smtp_host']      = 'smtp.gmail.com';            
		    $config['smtp_port']      = '587';  
		    // $config['smtp_port']      = '465';            
		    $config['smtp_user']      = $outlook_account_username;            
		    $config['smtp_pass']      = $outlook_account_password;            
		    $config['mailtype']       = 'html';            
		    $config['charset']        = 'utf-8';            
		    $this->email->initialize($config);            
		    $this->email->set_newline("\r\n");            
		    $config['starttls'] = TRUE;           
		    $this->email->from($outlook_account_username, $user_name);            
		    $this->email->to($user_email);            
		    $this->email->subject($subject);            
		    $this->email->message($body);            

		if ($this->email->send()){
			// echo "success fully";
			$this->load->view('/register_success');
		}
		else
		{
			echo "Some problem has been occured, Pleace try with other mail-id";
		}

		// $this->load->view('/register_success');

	}

	public function sendmail()
	{
		
	} 

	public function moredetails()
	{
		$this->load->model('Register_model');
		$firstname = $this->session->userdata('firstname');
		$surname = $this->session->userdata('surname');
		$name = $firstname.$surname;
		$email = $this->session->userdata('email');
		$number = $this->input->post('number');
		$address = $this->input->post('address');
		$education = $this->input->post('education');

		$data = array
		(
			'name' => $name,
			'email' => $email,
			'number' => $number,
			'address' => $address,
			'education' => $education		
		);

		$this->Register_model->more_details($data);

  		$this->session->unset_userdata('firstname');
  		$this->session->unset_userdata('surname');
  		$this->session->unset_userdata('email');
		$this->load->view('moredetails-success');
	}

	function successfull()
	{
		$username=$this->input->post('email');
		$password=$this->input->post('password');
		$hash = md5($password);

		$sendata=array();
		$sendata['username']=$username;
		$sendata['password']=$hash;
		$userdetails = $this->Register_model->get_details($sendata);

		if(!empty($userdetails)){
			$userdetails=$userdetails[0];

			$sessionarray=array(
				'email'=>$userdetails['email'],
				'password'=>$userdetails['password']
			);
			$this->session->set_userdata($sessionarray);
			redirect('/login_success');
		}else{
			echo "You enter'd wrong username or password..pleace go back and try with correct username and password";
		}

	}

}

?>
