<?php
    if(isset($_SESSION['admin'])){
        $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
    }
    if (isset($_GET['keyword']) && $_GET['keyword'] != ''){
        $keyword = $_GET['keyword'];
        $nhanvien = $database->get_like('user_info','fullname',$keyword);
    }else{
        $nhanvien = $database->get('user_info',array());
    }
    require_once './View/V-quanlynguoidung.php';
?>