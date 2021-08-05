<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    $id = $_GET['id'];
    $product = $database->get('product',array('id'=>$id));
    $catalog = $database->get('catalog',array('id'=>$product[0]['catalog']));
    $product_relative = $database->get_limit('product',array('catalog'=>$product[0]['catalog']),5);
    require_once './View/V-chitietsanpham.php';
?>