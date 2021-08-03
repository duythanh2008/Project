<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info',array('id'=>$_SESSION['customer']));
   }
   if (isset($_POST['change'])){
       $id = $_POST['id'];
       $newpass = $_POST['newpass'];
       $confirmpass = $_POST['confirmpass'];
       $error = array();
       if ($newpass == ''){
        $error['newpass'] = 'Vui lòng nhập mật khẩu mới';
        }
        else{
            if (strlen($newpass) < 8){
                $error['newpass'] = "Mật khẩu phải có ít nhất 8 kí tự";
            }
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
           $database->update('user_info',array('password'=>$newpass),array('id'=>$id));
           header('location:?controller=laylaimatkhauthanhcong');
       }
   }
    require_once('./View/V-laylaimatkhau.php');
?>