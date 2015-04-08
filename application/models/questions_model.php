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

	public function get_user_questions($user,$start = FALSE, $limit = FALSE)
	{
		if($start != FALSE){
			$query = $this->db->get_where('questions', array('userid' => $user))->limit($start,$limit);
			return $query->result_array();
		} else {
			$query = $this->db->get_where('questions', array('userid' => $user));
			return $query->result_array();
		}
	}

	public function get_questions(){
		$query = $this->db->get('questions');
		return $query->result_array();
	}

	public function get_question($questionid){
		$query=$this->db->get_where('comments',array('questionid'=>$questionid);
		return $query->row_array();
	}
}
?>