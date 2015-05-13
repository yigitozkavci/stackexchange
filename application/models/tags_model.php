<?php
class Tags_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getTag($tagid){
		$query = $this->db->get_where('tags', array('id' => $tagid ));
		return $query->row_array();
	}

	public function addTag($tagData){
		$this->db->insert('tags', $tagData);
	}
}
?>