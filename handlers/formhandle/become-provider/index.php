<?php

$path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';
include $path['root'] . '/includes/connect.inc.php';

//-----------------------Complete all validation---------------------
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = $path['root'] . "/images/provider-images/";
    $target_file = $target_dir . basename($_FILES["prov-passbook"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["prov-passbook"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["prov-passbook"]["size"] > 500000) {
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["prov-passbook"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["prov-passbook"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if (isset($_POST['prov-name'])) {
        if (!empty($_POST['prov-name'])) {
            $provName = $_POST['prov-name'];
            $provAge = $_POST['prov-age'];
            $provAddr = $_POST['prov-addr'];
            $provProfession = $_POST['prov-service'];
            $provContact = $_POST['prov-contact'];
            $provWorkexp = $_POST['prov-workexp'];
            $provRec1 = $_POST['prov-record'];
            $provAbout = $_POST['prov-about'];
            $provSpeciality = $_POST['prov-speciality'];
            $provPassbook = $_POST['prov-passbook'] = md5(uniqid(rand(),true));

            $db = new DB();
            $db->query('INSERT INTO ww_provider (prov_name, age, addr, profession, contact, workexp, prov_record, about, speciality, photo_id,`reg_date`, prov_active_status) VALUES(:prov_name, :age, :addr, :profession, :contact, :workexp, :prov_record, :about, :speciality, :photo_id,now(), :prov_active_status)');

            $db->bind(':prov_name', $provName);
            $db->bind(':age', $provAge);
            $db->bind(':addr', $provAddr);
            $db->bind(':profession', $provProfession);
            $db->bind(':contact', $provContact);
            $db->bind(':workexp', $provWorkexp);
            $db->bind(':prov_record', $provRec1);
            $db->bind(':about', $provAbout);
            $db->bind(':speciality', $provSpeciality);
            $db->bind(':photo_id', $provPassbook);
            $db->bind(':prov_active_status', 0);
            $exeRes = $db->execute();
            if ($exeRes) {
                header('Location: /reg-provider-successful');
                $db->terminate();
            }

        } else {
            echo 'Name, email and Message Field Can\'t be empty';
        }
    }
}
