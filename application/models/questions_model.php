<?php 
class Questions_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function add_question(){
		$quesData['title']=$this->input->post('title');
		$quesData['desc']=$this->input->post('desc');
		$quesData['userid']=$this->session->userdata('userid');

		$this->db->insert('questions', $quesData);
	}
}
?>