<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    if (isset($_POST['change'])){
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $confirmpass = $_POST['confirmpass'];
        $error = array();
        $notice = array();
        if ($oldpass == ''){
            $error['oldpass'] = 'Vui lòng nhập mật khẩu cũ';
        }
        else{
            if ($oldpass != $user[0]['password']){
                $error['oldpass'] = 'Mật khẩu cũ không đúng';
            }
        }
        if ($newpass == ''){
            $error['newpass'] = 'Vui lòng nhập mật khẩu mới';
        }
        else{
            if (strlen($newpass) < 8){
                $error['newpass'] = "Mật khẩu phải có ít nhất 8 kí tự";
            }
        }
        if ($oldpass == $newpass){
            $error['oldpass'] = 'Mật khẩu cũ và mật khẩu mới trùng khớp';
        }
        if ($confirmpass == ''){
            $error['confirmpass'] = 'Vui lòng nhập lại mật khẩu mới';
        }
        else{
            if (strlen($confirmpass) < 8){
                $error['confirmpass'] = "Mật khẩu phải có ít nhất 8 kí tự";
            }
        }
        if ($newpass != $confirmpass){
            $error['newpass'] = 'Mật khẩu không trùng khớp';
        }
        if (!$error){
            $database->update('user_info',array('password'=>$newpass),array('id'=>$_SESSION['customer']));
            $notice['message'] = 'Đổi mật khẩu thành công';
            require_once './View/V-doimatkhaukhachhang.php';
        }
    }
    require_once './View/V-doimatkhaukhachhang.php';
?>