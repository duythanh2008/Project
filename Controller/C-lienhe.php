<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    if (isset($_POST['contact'])){
        $fullname= $_POST['fullname'];
        $email= $_POST['email'];
        $content= $_POST['content'];
        $error = array();
        $notice = array();
        if ($fullname == ''){
            $error['fullname'] = 'Vui lòng nhập họ và tên';
        }
        if ($email == ''){
            $error['email'] = 'Vui lòng nhập email';
        }
        if ($content == ''){
            $error['content'] = 'Vui lòng nhập nội dung';
        }
        if (!$error){
            $database->insert('contact', array(
                'fullname'=>$fullname,
                'email'=>$email,
                'content' => $content
            ));
            $notice['message']= 'Gửi liên hệ thành công, chúng tôi sẽ trả lời bạn nhanh nhất có thể';
            require_once './View/V-lienhe.php';
        }
    }
    require_once './View/V-lienhe.php';
?>