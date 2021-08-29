<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    if (isset($_POST['find'])){
        $email = $_POST['email'];
        $error = '';
        $data_user = array();
        if ($email == ''){
            $error = "Email không được để trống";
            require_once('./View/V-quenmatkhau.php');
        }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error= "Định dạng email không đúng";
                require_once('./View/V-quenmatkhau.php');
            }
        }
        if ($error == ''){
            $data_user=$database->get('user_info',array('email'=>$email));
            if(count($data_user)==0){
                $error = "Địa chỉ email không tồn tại";
                require_once('./View/V-quenmatkhau.php');
            }else {
                require_once('./View/V-kiemtramail.php');
            }
        }
        }else{
            require_once('./View/V-quenmatkhau.php');
        }
?>