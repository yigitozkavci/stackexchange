<?php 
class Tagged extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){		
		$this->load->view('templates/header');
		$this->load->view('tagged');
		$this->load->view('templates/footer');

	}
	
}
?>