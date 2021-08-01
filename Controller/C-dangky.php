<?php
    if (isset($_POST['dangky'])){
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $error = array();
        if ($username == ''){
            $error['username']= "Vui lòng nhập tên đăng nhập";
        }
        if ($email == ''){
            $error['email']= "Vui lòng nhập email";
        }
        if ($password == ''){
            $error['password']= "Vui lòng nhập mật khẩu";
        }
        if ($phone == ''){
            $error['phone']= "Vui lòng nhập số điện thoại";
        }
        if (!$error){
            $admin_creat1 = $database->get('user_info',array('username'=>$username));
            if (count($admin_creat1) > 0){
                $error['username']= "Username have already exists";
            }
            $admin_creat2 = $database->get('user_info',array('email'=>$email));
            if (count($admin_creat2) > 0){
                $error['email']= "Email have already exists";
            }
        }
        if (!$error){
            $database->insert('user_info',array(
                'username'=>$username,
                'password'=>$password,
                'email'=>$email,
                'phone'=>$phone
            ));
            echo "<script type='text/javascript'>alert('Đăng ký thành công !');</script>";
            header("Refresh:0.1; url=?controller=dangnhap");
        }
    }
    require_once './View/V-dangky.php';
?>