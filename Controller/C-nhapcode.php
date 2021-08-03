<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info',array('id'=>$_SESSION['customer']));
   }
   if (isset($_POST['submit'])){
       $id = $_POST['id'];
       $code = $_POST['code'];
       $error = '';
       $data_user = $database->get('user_info', array('id'=>$id));
       if ($code == $data_user[0]['code']){
            require_once('./View/V-laylaimatkhau.php');
       }else{
           $error = "Mã xác nhận không chính xác";
           require_once('./View/V-nhapcode.php');
       }
   }else{
       require_once('./View/V-nhapcode.php');
}
?>