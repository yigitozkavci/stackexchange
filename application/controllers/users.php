<?php 
class Users extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){		
		$this->load->view('templates/header');
		$this->load->view('users');
		$this->load->view('templates/footer');

	}
	
}
?>