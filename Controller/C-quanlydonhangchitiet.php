<?php
     $id = $_GET['id'];
     $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
     $customer = $database->get('user_order',array('id'=>$id));
     $customer_detail = $database->get('user_order_detail',array('order_id'=>$id));
     require_once('./View/V-quanlydonhangchitiet.php');
?>