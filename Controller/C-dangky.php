<?php
    if (isset($_POST['dangky'])){
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $error = array();
        if ($username == ''){
            $error['username']= "Vui lòng nhập tên đăng nhập";
        }else{
            if (strlen($username) < 6){
                $error['username']= "Tên đăng nhập phải có ít nhất 6 kí tự";
            }
        }
        if ($email == ''){
            $error['email']= "Vui lòng nhập email";
        }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email']= "Định dạng email không đúng";
            }
        }
        if ($password == ''){
            $error['password']= "Vui lòng nhập mật khẩu";
        }else{
            if (strlen($password) < 8){
                $error['password']= "Mật khẩu phải có ít nhất 8 kí tự";
            }
        }
        if ($phone == ''){
            $error['phone']= "Vui lòng nhập số điện thoại";
        }else{
            if(!preg_match('/^[0-9]{10}+$/', $phone)) {
                $error['phone']= "Số điện thoại không đúng";
            }
        }
        if (!$error){
            $admin_creat1 = $database->get('user_info',array('username'=>$username));
            if (count($admin_creat1) > 0){
                $error['username']= "Tên đăng nhập đã tồn tại";
            }
            $admin_creat2 = $database->get('user_info',array('email'=>$email));
            if (count($admin_creat2) > 0){
                $error['email']= "Email đã được đăng ký bởi tài khoản khác";
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