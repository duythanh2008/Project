<?php
    if (isset($_SESSION['admin'])){
        header('location: ?controller=trangquantri');
    }
    if (isset($_POST['dangnhap'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $error = array();
        if ($username == ''){
            $error['username'] = "Vui lòng nhập tên đăng nhập";
        }
        if ($password == ''){
            $error['password'] = "Vui lòng nhập mật khẩu";
        }
        if (!$error){
            $admin = $database->get('admin',array('username'=>$username));
            if (!$admin){
                $error['username'] = "Tên đăng nhập không tồn tại";
            }
            else {
                if ($password != $admin[0]['password']){
                $error['password'] = "Mật khẩu không chính xác";
                }
        }
        }
        if (!$error){
            $_SESSION['admin'] = $admin[0]['id'];
            header('location: ?controller=trangquantri');
        }
    }
    require_once './View/V-dangnhapquantri.php';
?>