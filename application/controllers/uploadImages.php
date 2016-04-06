<?php

class UploadImages extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function uploadimage1() {
        if (isset($_FILES["file"]["type"])) {
            $validextensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            if (in_array($file_extension, $validextensions)) {

                if ($_FILES["file"]["error"] > 0) {
                    echo "Gặp sự cố khi chọn file!";
                } else {
                    if (file_exists("uploads/" . $_FILES["file"]["name"])) {
                        echo "";
                    } else {
                        $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                        $targetPath = "uploads/" . $_FILES['file']['name']; // Target path where file is to be stored
                        move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
                        echo "";
                    }
                }
            } else {
                echo "Chọn lại file hình ảnh!";
            }
        }
    }

    public function uploadimage2() {
        if (isset($_FILES["file"]["type"])) {
            $validextensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            if (in_array($file_extension, $validextensions)) {
                if ($_FILES["file"]["error"] > 0) {
                    echo "Gặp sự cố khi chọn file!";
                } else {
                    if (file_exists("uploads/" . $_FILES["file"]["name"])) {
                        echo "";
                    } else {
                        $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                        $targetPath = "uploads/" . $_FILES['file']['name']; // Target path where file is to be stored
                        move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
                        echo "";
                    }
                }
            } else {
                echo "Chọn lại file hình ảnh!";
            }
        }
    }

}
