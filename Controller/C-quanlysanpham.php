<?php
    if(isset($_SESSION['admin'])){
        $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
    }
    $product = $database->get('product',array());
    require_once './View/V-quanlysanpham.php';
?>