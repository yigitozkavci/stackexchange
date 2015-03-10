<?php
class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index()
	{
		$this->users_model->logout();
		redirect('/home');	
	}

}
?>
