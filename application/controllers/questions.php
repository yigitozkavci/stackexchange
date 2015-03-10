<?php 
class Questions extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('questions_model');
	}

	public function index(){
		$this->load->view('questions');
	}

	public function add_question(){
		$this->load->view('add_question');	
	}

	public function add_process(){
		$this->questions_model->add_question();
	}
}
?>