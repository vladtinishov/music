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
    public function getAllMusic(){
        $query = $this->db->query("SELECT musics.name, singers.singer_name
                                    FROM musics 
                                    INNER JOIN singers 
                                    ON 
                                    musics.singer_id = singers.singer_id 
                                    GROUP BY musics.name
                                    ");
        return $query;
    }
}