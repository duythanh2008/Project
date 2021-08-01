<?php
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
            $user = $database->get('user_info',array('username'=>$username));
            if (!$user){
                $error['password'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
            }
            else {
                if ($password != $user[0]['password']){
                $error['password'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
                }
        }
        }
        if (!$error){
            $_SESSION['customer'] = $user[0]['id'];
            header('location: ?controller=trangchu');
        }
    }
    require_once './View/V-dangnhap.php';
?>