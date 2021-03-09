<?php defined('BASEPATH') or exit('Not Found');

class Users_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function getUsers(){
        $query = $this->db->get('users');
        return $query->result_array();
    }
}