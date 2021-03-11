<?php defined('BASEPATH') or exit('Not Found');

class Music_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function setMusic($singer_id, $name){
        $query = $this->db->query("INSERT INTO musics VALUES(
                                    '', $singer_id, '$name')");
        return $query;
    }
}