<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    $id = $_GET['id'];
    $package = $database->get('user_order',array('id'=>$id));
    $package_details = $database->get('user_order_detail',array('order_id'=>$id));
    require_once './View/V-chitietdonhang.php';
?>