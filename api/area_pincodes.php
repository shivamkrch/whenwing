<?php
if(isset($_GET['q'])){
    $file = fopen($_SERVER['DOCUMENT_ROOT']."/All_India_pincode_data_26022018.csv", "r");
    $autocomp_arr = array();
    fgetcsv($file);
    while(!feof($file)){
        $line = fgetcsv($file);
        $ip = utf8_encode($line[0]. ", ". $line[8]. ", ". $line[9]. " - ". $line[1]);
        if(strpos(strtolower($ip), strtolower($_GET['q'])) !== FALSE){
            $autocomp_arr[] = $ip;
        }
    }
    echo json_encode($autocomp_arr);
}else{
    echo "Invalid REQUEST";
}