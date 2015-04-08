<?php
class Comments_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}


	public function add_comment(){
		$comData['desc']=$this->input->post('desc');
		$comData['userid']=$this->session->userdata('userid');
		$comData['questionid']=$this->input->post('questionid');

		$this->db->insert('comments', $comData);

	}

	public function get_comments($questionid){
		$query=$this->db->get_where('comments',array('questionid'=>$questionid));
		return $query->result_array();
	}
}
 ?>