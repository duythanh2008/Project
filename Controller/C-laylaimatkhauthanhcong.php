<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info',array('id'=>$_SESSION['customer']));
   }
   $notice['message'] = 'Lấy lại mật khẩu thành công';
   require_once './View/V-laylaimatkhauthanhcong.php';
?>