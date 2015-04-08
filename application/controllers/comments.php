<?php 
 class Comments extends CI_Controller{
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('comments_model');

 	}

 	public function add_comment(){
 		$comData['desc']=$this->input->post('desc');
		$comData['userid']=$this->session->userdata('userid');
		$comData['questionid']=$this->input->post('questionid');

		$this->comments_model->add_comment($comData);
 	}
 }
?>