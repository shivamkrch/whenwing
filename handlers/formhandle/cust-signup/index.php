<?php
$path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';
include $path['root'] . '/includes/connect.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cust-name']) && isset($_POST['cust-email']) && isset($_POST['cust-mobile']) && isset($_POST['cust-password'])) {
        if (!empty($_POST['cust-name']) && !empty($_POST['cust-email']) && !empty($_POST['cust-mobile']) && !empty($_POST['cust-password'])) {

            $custName = htmlspecialchars($_POST['cust-name']);
            $custEmail = htmlspecialchars($_POST['cust-email']);
            $custMobile = htmlspecialchars($_POST['cust-mobile']);
            $custPassword = htmlspecialchars($_POST['cust-password']);
            $custPassword = password_hash($custPassword,PASSWORD_BCRYPT);

            $db = new DB();
            $db->query('SELECT  `email`  from  `ww_customers` WHERE  `email` = :email');
            $db->bind(':email', $custEmail);
            $exeRes = $db->resultset();
            if(count($exeRes) == 0){
                $db->query('INSERT INTO `ww_customers`(`fullname`, `email`, `mobile`,`cust_password`,`reg_date`, `active_status`) VALUES (:fullname, :email, :mobile, :cust_password, now(), :active_status)');
                $db->bind(':fullname', $custName);
                $db->bind(':email', $custEmail);
                $db->bind(':mobile', $custMobile);
                $db->bind(':cust_password', $custPassword);
                $db->bind(':active_status', 1);
                $exeRes = $db->execute();
                if ($exeRes) {
                   header('Location: /reg-successful');
                    $db->terminate();
                }
            }else{
                echo 'User Already Registered';
            }

            

        } else {
            echo 'Name, email and Message Field Can\'t be empty';
        }
    }
}
