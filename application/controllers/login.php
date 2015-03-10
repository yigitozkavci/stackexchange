<?php 
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index(){
		$this->load->view('login');
	}

	public function process(){
		if($this->session->userdata('userid') != FALSE) {
			redirect('/home');
		} else {
			$username= $this->input->post('username');
			$password= $this->input->post('password');

			$this->users_model->login($username, $password);

			redirect('/home');
		}
	}
}
?>