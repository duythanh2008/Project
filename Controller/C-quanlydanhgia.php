<?php
    if(isset($_SESSION['admin'])){
        $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
    }
    $rating_confirmed = $database->get('rating', array('status'=>1));
    $rating_not_confirm = $database->get('rating', array('status'=>0));
    require_once './View/V-quanlydanhgia.php';
?>