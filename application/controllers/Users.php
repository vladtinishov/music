<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	}
	public function get_users(){
		$data['users'] = $this->users->getUsers();
	}
	public function index()
	{
		$data['users'] = $this->users_model->getUsers();
		$this->load->view('myindex', $data);
	}
}
