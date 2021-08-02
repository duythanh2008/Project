<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    if (isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
        $product = $database->get_like('product','name',$keyword);
    }
    else{
            $product = $database->get('product',array());
    }
    require_once './View/V-trangchu.php';
?>