<?php
    if(isset($_SESSION['admin'])){
        $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
    }
    $order_not_confirm = $database->get('user_order',array('status'=>0));
    $order_confirmed = $database->get('user_order',array('status'=>1));
    require_once './View/V-quanlydonhang.php';
?>