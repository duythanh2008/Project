<?php
     if(isset($_SESSION['customer'])){
          $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
     }
     $id = $_GET['id'];
     $product = $database->get('product',array('id'=>$id));
     if (isset($_POST['add'])){
        if(isset($_SESSION['cart'])){
            if(isset($_SESSION['cart'][$id])){
                 $_SESSION['cart'][$id]['sl']=$_SESSION['cart'][$id]['sl'] + $_POST['qty'];
                 $_SESSION['qty'] += + $_POST['qty'];
            }
            else{
                 $_SESSION['cart'][$id]['id']=$product[0]['id'];
                 $_SESSION['cart'][$id]['sl']=$_POST['qty'];
                 $_SESSION['cart'][$id]['price']=$product[0]['price'];
                 $_SESSION['cart'][$id]['img-link']=$product[0]['image'];
                 $_SESSION['cart'][$id]['name']=$product[0]['name'];
                 $_SESSION['cart'][$id]['size']=$_POST['size'];
                 $_SESSION['qty'] += $_SESSION['cart'][$id]['sl'];
            }
       }
       else{
                 $_SESSION['cart'][$id]['id']=$product[0]['id'];
                 $_SESSION['cart'][$id]['sl']=$_SESSION['cart'][$id]['sl'] + $_POST['qty'];
                 $_SESSION['cart'][$id]['price']=$product[0]['price'];
                 $_SESSION['cart'][$id]['img-link']=$product[0]['image'];
                 $_SESSION['cart'][$id]['name']=$product[0]['name'];
                 $_SESSION['cart'][$id]['size']=$_POST['size'];
                 $_SESSION['qty'] += $_SESSION['cart'][$id]['sl'];
       }
     }
     echo "<script type='text/javascript'>alert('Thêm vào giỏ thành công');</script>";
     header('refresh:0.1;url=?controller=chitietsanpham&id='.$id);
?>