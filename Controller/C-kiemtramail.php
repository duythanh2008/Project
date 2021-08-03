<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    if (isset($_POST['confirm'])){
        $id = $_POST['id'];
        $data_user = $database->get('user_info', array('id'=>$id));
        $code = rand(100000, 999999);
        $title = "Đổi mật khẩu tài khoản website Fashion GenZ";
        $content = "Chào bạn ".$data_user[0]['fullname'].","."
        <br>Chúng tôi đã nhận được yêu cầu lấy lại mật khẩu từ bạn.
        <br>Vui lòng nhập mã này để lấy lại mật khẩu : <b>".$code."<b>";
        $nTo = $data_user[0]['fullname'];
        $mTo = $data_user[0]['email'];
        $diachicc='thanhnguyen15022008@gmail.com';
        $mail = $database->sendMail($title,$content,$nTo,$mTo,$diachicc='');
        if ($mail){
            $database->update('user_info',array('code'=>$code),array('id'=>$id));
            require_once('./View/V-nhapcode.php');
        }else{
            echo "Error !";
        }
     }else{
         require_once('./View/V-kiemtramail.php');
     }
?>