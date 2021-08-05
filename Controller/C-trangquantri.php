<?php
    if(isset($_SESSION['admin'])){
        $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
    }
    else{
        header('location: ?controller=dangnhapquantri');
    }
    require_once './View/V-trangquantri.php';
?>