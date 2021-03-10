<?php
class MusicDownload extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('music_model');
    }
    public function downloadFile(){
        $uploaddir = 'music';
        $uploadfile = $uploaddir . '/' . basename($_FILES['userfile']['name']);

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            $this->music_model->setMusic(1, 'hello from cont', 1);
            echo "Yes";
        } else {
            echo "No";
        }
    }
}

