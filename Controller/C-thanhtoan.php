<?php
     if(isset($_SESSION['customer'])){
          $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
          require_once('./View/V-thanhtoan.php');
     }else{
          echo "<script type='text/javascript'>alert('Bạn phải đăng nhập tài khoản để có thể mua hàng !');</script>";
          header('refresh:0.1;url=?controller=dangnhap');
     }
?>