<?php
$dl_path = 'upload/';

if (isset($_POST['dl'])):

    $file_name = $_POST['dl'];

    switch ($file_name) {
        case "guide":
            $fakeFileName = "user-guide.pdf";
            $realFileName = "User_Guide.pdf";
            break;
        case "app":
            $fakeFileName = "ccms.zip";
            $realFileName = "this_can_be_random_name.zip";
            break;
    }

    $file = $dl_path . $realFileName;

    if (!file_exists($file)) {
        die("File not found");
    }

    $fp = fopen($file, 'rb');

    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=$fakeFileName");
    header("Content-Length: " . filesize($file));
    fpassthru($fp);
endif;
