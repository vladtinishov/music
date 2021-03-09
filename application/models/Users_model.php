<?php defined('BASEPATH') or exit('Not Found');

class Users_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function getUsers($password, $name){
        $query = $this->db->query("SELECT * FROM users 
                                WHERE user_name='$name' AND
                                password='$password'");
        return $query->result_array();
    }
}