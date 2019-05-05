<?php
$dl_path = 'upload/';

if (isset($_POST['dl'])):

    $file_name = $_POST['dl'];

    switch($file_name){
        case "guide":
            $fakeFileName = "giveu-ccms-user-guide.pdf";
            $realFileName = "GIVEu CCMS User Guide.pdf";
            break;
        case "app":
            $fakeFileName = "giveu_ccms_by_amdtllc.zip";
            $realFileName = "ccms-08-28-2017-v3.zip";
            break;
    }


    $file = $dl_path . $realFileName;

    if( !file_exists($file) ) die("File not found");

    $fp = fopen($file, 'rb');

    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=$fakeFileName");
    header("Content-Length: " . filesize($file));
    fpassthru($fp);
endif;