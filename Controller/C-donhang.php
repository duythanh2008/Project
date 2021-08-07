<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
        $package_user = $database->get('user_order', array('user_id'=>$user[0]['id']));
    }
    if (isset($_POST['checksubmit'])){
        $code = $_POST['code'];
        $error = array();
        if ($code == ''){
            $error['code'] = 'Vui lòng nhập mã đơn hàng';
        }else{
            $checkcode = $database->get('user_order',array('id'=>$code));
            if (count($checkcode) <= 0){
                $error['code'] = 'Mã đơn hàng không chính xác';
            }
        }
    }
    require_once './View/V-donhang.php';
?>