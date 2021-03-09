<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$_POST = json_decode(file_get_contents('php://input'), true);
	}
	public function get_user(){
		$password = $_POST['password'];
		$name = $_POST['name'];
		$data['users'] = $this->users_model->getUsers($password, $name);
		echo json_encode($data);
	}
}
