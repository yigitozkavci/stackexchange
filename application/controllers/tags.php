<?php 
class Tags extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('tags_model');
	}

	public function index(){		
		$this->load->view('templates/header');
		$this->load->view('tags');
		$this->load->view('templates/footer');

	}
	
	public function tag_info(){		
		$this->load->view('templates/header');
		$this->load->view('tag_info');
		$this->load->view('templates/footer');
	}	

	public function tagged($id){		
		$this->load->view('templates/header');
		$this->load->view('tagged', $id);
		$this->load->view('templates/footer');

	}

	public function get_tag(){
		if($this->input->post('name')!=NULL){
			$tagData['name'] = $this->input->post('name');
			$tagData['desc'] = $this->input->post('desc');
			$this->tags_model->addTag($tagData);
		}else{
			$this->load->view('templates/header');
			$this->load->view('addTag');
			$this->load->view('templates/footer');
		}
	}
}
?>