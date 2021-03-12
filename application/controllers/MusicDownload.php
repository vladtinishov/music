<?php
class MusicDownload extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('music_model');
    }
    public function downloadFile(){
        $user = $_POST['user_id'];
        $uploaddir = 'music';
        $uploadfile = $uploaddir . '/' . basename($_FILES['userfile']['name']);

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            $this->music_model->setMusic(
                                    $user, 
                                    $_FILES['userfile']['name'], 
                                    );
            echo "Yes";
        } else {
            echo "No";
        }
    }
    public function get_all_music(){
        $result = $this->music_model->getAllMusic();
        echo json_encode($result->result_array());
    }
}

