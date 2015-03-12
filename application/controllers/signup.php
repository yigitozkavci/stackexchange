<?php 
class Signup extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('signup');
		$this->load->view('templates/footer');
	}

	public function process(){
		$result = $this->users_model->sign_up();
		$this->load->view('home');
	}
}
?>