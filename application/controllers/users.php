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
	
	public function profile(){
		$this->load->view('templates/header');
		$this->load->view('userProfile');
		$this->load->view('templates/footer');
	}

	public function top_posts(){
		$this->load->view('templates/header');
		$this->load->view('user_top_posts');
		$this->load->view('templates/footer');
	}
}
?>