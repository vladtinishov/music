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
	// как обычный юзер
	public function get_user(){
		$data['user'] = $this->users_model->getUser($this->password, 
														$this->name);
		echo json_encode($data);
	}
	public function set_user(){
		$data['response'] = $this->users_model->setUser($this->password, 
															$this->name);
		echo json_encode($data);
	}
	// как исполнитель
	public function get_singer(){
		$data['singer'] = $this->users_model->getSinger($this->password,
														$this->name);
		echo json_encode($data);
	}
	public function set_singer(){
		$data['response'] = $this->users_model->setSinger($this->password,
														$this->name);
		echo json_encode($data);
	}
}
