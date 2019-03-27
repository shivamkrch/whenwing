<?php
$path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';
include $path['root'] . '/includes/connect.inc.php';
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    if (isset($_POST['orderId'])) {
        if (!empty($_POST['orderId'])) {
            $orderId = htmlspecialchars($_POST['orderId']);
            $db = new DB();
        
            $db->query('UPDATE `ww_customer_order` SET `order_status`= 2  WHERE `order_id` = :order_id');
            $db->bind(':order_id', $orderId);
            $exeRes = $db->execute();
            if ($exeRes) {
                echo 'Successfully Updated';
                $db->terminate();
            }
           
        }
    }
}