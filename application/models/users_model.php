<?php 
class Users_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function login($username, $password){
		$this->db->where("mail = '$username' or username = '$username'");
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		$user = $query->row_array();

		if($user != null){
			$userdataarray = array(
				'userid' => $user['userid'],
				'username' => $user['username'],
				'email'     => $user['mail']
				);
			$this->session->set_userdata($userdataarray);
			return 1;
		}else{
			redirect('/login');
			return 0;
		}
	}

	public function logout(){
		if($this->session->sess_destroy()){
			return 1;
		}else{
			return 0;
		}
	}

	public function sign_up(){
		$userData['username']= $this->input->post('username');
		$userData['password']= $this->input->post('password');
		$userData['mail']= $this->input->post('mail');

		$this->db->insert('users', $userData);
	}
}
?>