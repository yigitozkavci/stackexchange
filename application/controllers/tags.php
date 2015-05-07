<?php 
class Tags extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){		
		$this->load->view('templates/header');
		$this->load->view('tags');
		$this->load->view('templates/footer');

	}
	
}
?>