<?php
    if(isset($_SESSION['admin'])){
        $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
    }
    if (isset($_GET['keyword']) && $_GET['keyword'] != ''){
        $keyword = $_GET['keyword'];
        $product = $database->get_like('product','name',$keyword);
    }else{
        $product = $database->get('product',array());
    }
    require_once './View/V-quanlysanpham.php';
?>