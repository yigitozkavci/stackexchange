<?php 
class User_top_posts extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){		
		$this->load->view('templates/header');
		$this->load->view('user_top_posts');
		$this->load->view('templates/footer');

	}
	
}
?>