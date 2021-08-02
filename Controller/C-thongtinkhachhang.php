<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    if (isset($_POST['edit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        // $error = array();
        // if ($fullname == ''){
        //     $error['fullname'] = "Vui lòng nhập họ và tên";
        // }
        // if ($address == ''){
        //     $error['address'] = "Vui lòng nhập họ và tên";
        // }
        $database->update('user_info',array(
                  'fullname'=>$fullname,
                  'phone'=>$phone,
                  'address'=>$address,
                  'email'=>$email
             ),array('id'=>$_SESSION['customer']));
        echo "<script type='text/javascript'>alert('Sửa thông tin thành công !');</script>";
        header("Refresh:0.2; url=?controller=thongtinkhachhang");
   }
    require_once './View/V-thongtinkhachhang.php';
?>