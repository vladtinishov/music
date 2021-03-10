<?php
class MusicDownload extends CI_Controller{
    public function downloadFile(){
        $uploaddir = 'music';
        $uploadfile = $uploaddir . '/' . basename($_FILES['userfile']['name']);

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "Yes";
        } else {
            echo "No";
        }
    }
}

?>