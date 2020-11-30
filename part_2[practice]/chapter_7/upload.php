<?php
$dir = "./upload/";

if (isset($_FILES["upfile"])) {

    $upfile = $_FILES["upfile"]["tmp_name"];
    $upfile_name = $_FILES["upfile"]["name"];
    $upfile_size = $_FILES["upfile"]["size"];
    $upfile_type = $_FILES["upfile"]["type"];
    $error_code = $_FILES["upfile"]["error"];

    if ($error_code == 0) {
        echo "Name of file on server: " . $upfile . "<br>";
        echo "Name of file on computer of user: " . $upfile_name . "<br>";
        echo "MIME-type of file: " . $upfile_type . "<br>";
        echo "Size of file: " . $upfile_size . "<br>";

        $upfile_name = $dir . $upfile_name;

        copy($upfile, $upfile_name);
    }

}