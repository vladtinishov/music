<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	private $name, $password;
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		
		$_POST = json_decode(file_get_contents('php://input'), true);
		$this->password = $_POST['password'];
		$this->name = $_POST['name'];
	}
	public function get_user(){
		$data['users'] = $this->users_model->getUsers($this->password, 
														$this->name);
		echo json_encode($data);
	}
	public function set_user(){
		$data['response'] = $this->users_model->setUsers($this->password, 
															$this->name);
		echo json_encode($data);
	}
}
