<?php defined('BASEPATH') or exit('Not found');

class Main extends CI_Controller{
    public function index(){
        $this->load->view('client/index');
    }
}