<?php     
          $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
          $order_not_confirm = $database->get('user_order',array('status'=>0));
          $order_confirmed = $database->get('user_order',array('status'=>1));
          $id = $_GET['id'];
          $error = array();
          $error['detail'] = "Sản phẩm hết hàng:";
          $count=0;
          $data_detail = $database->get('user_order_detail',array('order_id'=>$id));
          foreach ($data_detail as $key => $value){
               $product = $database->get('product',array('id'=>$value['product_id']));
               if($product[0]['qty']-$value['qty'] < 0){
                    $error['product'] = "Đơn hàng số ".$value['order_id']." có sản phẩm đã hết hàng !";
                    $product_detail = $database->get('product',array('id'=>$value['product_id']));
                    $error['detail'] .=" ".$product_detail[0]['name'].",";
                    $count=1;
               }
               
          }
          $error['detail'] = trim($error['detail'],",");
          foreach ($data_detail as $key => $value){
               $product = $database->get('product',array('id'=>$value['product_id']));
               if($count==0){
                    $database->update('product',array('qty'=>$product[0]['qty']-$value['qty']),array('id'=>$value['product_id']));
               }
          }
          if($count==0){
               date_default_timezone_set('Asia/Ho_Chi_Minh');
               $date = date('Y/m/d H:i:s', time());
               $database->update('user_order',array('status'=>1,'time_delivered'=>$date),array('id'=>$id));
               $data_user = $database->get('user_order',array('id'=>$id));
               $title = "Đơn hàng #". $id ." của bạn đã được xác nhận";
               $content = "Chào bạn ".$data_user[0]['fullname'].","."
               <br>Đơn vị vận chuyển sẽ giao hàng trong thời gian sớm nhất. Vui lòng giữ liên lạc trong khoảng thời gian này !
               <br>Cảm ơn bạn đã sử dụng sản phẩm của chúng tôi.
               <br>Fashion GenZ rất vui khi được phục vụ bạn <3";
               $nTo = $data_user[0]['fullname'];
               $mTo = $data_user[0]['email'];
               $diachicc='thanhnguyen15022008@gmail.com';
               $mail = $database->sendMail($title,$content,$nTo,$mTo,$diachicc='');
               header('location:?controller=quanlydonhang');
          }
          require_once('./View/V-quanlydonhang.php');
?>