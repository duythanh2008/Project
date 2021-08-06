<?php
     if(isset($_SESSION['customer'])){
          $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
     }
     //Lấy giá trị method trên URL để biết người dùng muốn làm gì
     $method=$_GET['method'];
     //Lấy giá trị ID trên URL để biết người dùng muốn thao tác với sản phẩm nào
     $id = $_GET['id'];
     switch ($method){
          case 'prev':
               // Trừ số lượng sản phẩm đi 1
               $_SESSION['cart'][$id]['sl']-=1;
               header('Location: ' . $_SERVER['HTTP_REFERER']);
               //Kiếm tra số lượng của sản phẩm coi có bằng 0 không
               if ($_SESSION['cart'][$id]['sl']==0){
               // Nếu sản phẩm bằng 0 thì xóa sản phẩm
                    unset($_SESSION['cart'][$id]);       
               }
               //Kiểm tra biến $_SESSION['cart'] có rỗng không
               if (empty($_SESSION['cart'])){
                    unset($_SESSION['cart']);
               }
               break;
          case 'next':
               // Cộng số lượng sản phẩm đi 1
               $_SESSION['cart'][$id]['sl']+=1;
               //Trở về trang giỏ hàng
               header('Location: ' . $_SERVER['HTTP_REFERER']);
               break;
          case 'delete':
               //Xóa sản phẩm có trong giỏ hàng
               unset($_SESSION['cart'][$id]); 
               header('Location: ' . $_SERVER['HTTP_REFERER']);
               //Kiểm tra biến $_SESSION['cart'] có rỗng không
               if (empty($_SESSION['cart'])){
                    unset($_SESSION['cart']);
               }
          break;
          default:
               header('location: ?controller=trangchu');
               break;
     }
?>