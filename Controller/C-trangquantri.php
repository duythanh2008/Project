<?php
    if(isset($_SESSION['admin'])){
        $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
    }
    else{
        header('location: ?controller=dangnhapquantri');
    }
    $user_order = $database->get('user_order',array());
    $user_order_detail = $database->get('user_order_detail',array());
    $user_order_not_confirmed = $database->get('user_order',array('status'=>0));
    $user_order_confirmed = $database->get('user_order',array('status'=>1));
    foreach ($user_order_not_confirmed as $key => $value){
        foreach ($database->get('user_order_detail',array('order_id'=>$value['id'])) as $key => $values){
            
        }
    }
    require_once './View/V-trangquantri.php';
?>