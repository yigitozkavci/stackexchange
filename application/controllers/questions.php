<?php 
class Questions extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('questions_model');
	}

	public function index(){
		$data['questions'] = $this->questions_model->get_user_questions($this->session->userdata('userid'));
		$this->load->view('templates/header');
		$this->load->view('user_questions', $data);
		$this->load->view('templates/footer');
	}

	public function add_question(){
		$this->load->view('templates/header');
		$this->load->view('add_question');
		$this->load->view('templates/footer');	
	}

	public function add_process(){
		$this->questions_model->add_question();
		redirect('/home');
	}

	public function all_questions(){
		$data['questions'] = $this->questions_model->get_questions();
		$this->load->view('templates/header');
		$this->load->view('user_questions', $data);
		$this->load->view('templates/footer');
	}
}
?>