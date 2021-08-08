<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    if (isset($_GET['keyword']) && $_GET['keyword'] != ''){
        $keyword = $_GET['keyword'];
        $product = $database->get_like('product','name',$keyword);
    }
        $product1 = $database->get_limit('product',array('catalog'=>2),5);
        $product2 = $database->get_limit('product',array('catalog'=>3),5);
        $product3 = $database->get_limit('product',array('catalog'=>4),5);
        $product4 = $database->get_limit('product',array('catalog'=>1),5);
        $product5 = $database->get_limit('product',array('catalog'=>5),5);
    require_once './View/V-trangchu.php';
?>