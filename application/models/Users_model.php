<?php defined('BASEPATH') or exit('Not Found');

class Users_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    // для обычных пользователей
    public function getUser($password, $name){
        $query = $this->db->query("SELECT * FROM users 
                                WHERE user_name='$name' AND
                                password='$password'");
        return $query->result_array();
    }
    public function setUser($password, $name){
        $query = $this->db->query("INSERT INTO users 
                                    VALUES ('', '$name', '$password')");
        return $query;
    }
    // для исполнителей
    public function getSinger($password, $name){
        $query = $this->db->query("SELECT * FROM singers 
                                    WHERE singer_naem='$name' AND 
                                    password='$password'")
    }
    public function setSinger($pasword, $name){
        $query = $this->db->query("INSERT INTO singers 
                                    VALUES('', '$name', '$password')");
        return $query;
    }
}