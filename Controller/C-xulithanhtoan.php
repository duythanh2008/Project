<?php
     if(isset($_SESSION['customer'])){
          $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
     }
     $error = array();
     $error['detail'] = 'Sản phẩm không đủ số lượng: ';
     if ($_POST['payment-cart'] == 'payment-cart'){
          $fullname = $_POST['fullname'];
          $address = $_POST['address'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $oder_id= rand(100000, 999999);
          date_default_timezone_set('Asia/Ho_Chi_Minh');
          $date = date('Y/m/d H:i:s', time());
          $count = 0;
          foreach ($_SESSION['cart'] as $key => $value){
               $product_check = $database->get('product',array('id'=>$value['id']));
               foreach ($product_check as $key => $values){
                    if ($values['qty'] - $value['sl'] < 0){
                         $count = 1;
                         $error['message'] = 'Đơn hàng có sản phẩm không đủ số lượng !';
                         $error['detail'].=" ".$values['name']." ( còn ". $values['qty'] ." sản phẩm ),";
                    }
               }
          }
          $error['detail'] = trim($error['detail'],",");
          if ($count==1){
               require_once('./View/V-thanhtoan.php');
          }

          if ($count == 0) {
               $amount = 0;
               foreach ($_SESSION['cart'] as $key => $value){
                    $amount_order = $value['sl']*$value['price'];
                    $amount += $amount_order;
               }
               $database->insert('user_order',array(
               'id'=>$oder_id,
               'fullname'=>$fullname,
               'address'=>$address,
               'phone'=>$phone,
               'email'=>$email,
               'amount'=>$amount,
               'status'=>0,
               'time_order'=>$date,
               'user_id'=>$user[0]['id'],
               'payment_method'=>0,
               ));

               foreach ($_SESSION['cart'] as $key => $value){
                    $database->insert('user_order_detail',array(
                         'order_id'=>$oder_id,
                         'product_id'=>$value['id'],
                         'qty'=>$value['sl'],
                         'price'=>$value['price'],
                         'amount'=>$value['sl']*$value['price'],
                         'size'=>$value['size']
                    ));
               }
               $database->update('user_info',array(
                    'fullname'=>$fullname,
                    'address'=>$address,
                    'phone'=>$phone
               ),array('id'=>$_SESSION['customer']));
               $id = $_SESSION['customer'];
               $data_user = $database->get('user_info', array('id'=>$id));
               $title = "Đặt hàng thành công";
               $content = "Đơn hàng của bạn sẽ được xác nhận
               <br>Cảm ơn vì đã chọn dịch vụ của Fashion GenZ<br>";
               $content.= '<p style="margin: 5px 0">Họ và tên: '.$fullname.'</p>';
                    $content.= '<p style="margin: 5px 0">Số điện thoại: '.$phone.'</p>';
                    $content.= '<p style="margin: 5px 0">Địa chỉ: '.$address.'</p>';
                    $content.= '<p style="margin: 5px 0">Mã đơn hàng: '.$oder_id.'</p>';
                    $content.= '<p style="margin: 5px 0">Tổng tiền: '.number_format($amount).'đ</p>';
                    $content.= '<table style="text-align:left" cellpadding="10">
                                   <thead>
                                        <tr>	
                                             <th>Sản phẩm</th>
                                             <th>Đơn giá</th>
                                             <th>Số lương</th>
                                             <th>Thành tiền</th>
                                        </tr>	
                                   </thead>';
                    //Bước 2: Lặp các sản phẩm người dùng mua ra
                    foreach ($_SESSION['cart'] as $key => $value) {
                         $content.= '<tr>
                                             <td>'.$value['name'].'</td>
                                             <td>'.number_format($value['price']).'đ</td>
                                             <td >'.$value['sl'].'</td>
                                             <td>'.number_format($value['price']*$value['sl']).'đ</td></tr>';
                    }
                    //Bước 3:đóng thẻ table
                    $content.='</tbody>
                    </table>';
                    $content.='<br>Chúc quý khách nhiều sức khỏe <3';
               $nTo = $data_user[0]['fullname'];
               $mTo = $data_user[0]['email'];
               $diachicc='thanhnguyen15022008@gmail.com';
               $mail = $database->sendMail($title,$content,$nTo,$mTo,$diachicc='');
               unset($_SESSION['cart']);
               $_SESSION['qty'] = 0;
               echo "<script type='text/javascript'>alert('Đặt hàng thành công !');</script>";
               header('refresh:0.1;url=?controller=trangchu');
          }
     }
     if ($_POST['payment-cart'] == 'payment-cart-online') {
          $fullname = $_POST['fullname'];
          $address = $_POST['address'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $_SESSION['fullname'] = $fullname;
          $_SESSION['address'] = $address;
          $_SESSION['phone'] = $phone;
          $_SESSION['email'] = $email;
          $oder_id= rand(100000, 999999);
          date_default_timezone_set('Asia/Ho_Chi_Minh');
          $date = date('Y/m/d H:i:s', time());
          $count = 0;
          foreach ($_SESSION['cart'] as $key => $value){
               $product_check = $database->get('product',array('id'=>$value['id']));
               foreach ($product_check as $key => $values){
                    if ($values['qty'] - $value['sl'] < 0){
                         $count = 1;
                         $error['message'] = 'Đơn hàng có sản phẩm không đủ số lượng !';
                         $error['detail'].=" ".$values['name'].",";
                    }
               }
          }
          $error['detail'] = trim($error['detail'],",");
          if ($count==1){
               require_once('./View/V-thanhtoan.php');
          }
          if ($count == 0) {
               $amount = 0;
               foreach ($_SESSION['cart'] as $key => $value){
                    $amount_order = $value['sl']*$value['price'];
                    $amount += $amount_order;
               }
               $_SESSION['amount'] = $amount;
               $_SESSION['order_id'] = $oder_id;
               $database->insert('user_order',array(
               'id'=>$oder_id,
               'fullname'=>$fullname,
               'address'=>$address,
               'phone'=>$phone,
               'email'=>$email,
               'amount'=>$amount,
               'status'=>0,
               'time_order'=>$date,
               'user_id'=>$user[0]['id'],
               'payment_method'=>1
          ));
     
               foreach ($_SESSION['cart'] as $key => $value){
                    $database->insert('user_order_detail',array(
                         'order_id'=>$oder_id,
                         'product_id'=>$value['id'],
                         'qty'=>$value['sl'],
                         'price'=>$value['price'],
                         'amount'=>$value['sl']*$value['price'],
                         'size'=>$value['size']
                    ));
               }
               $database->update('user_info',array(
                    'fullname'=>$fullname,
                    'address'=>$address,
                    'email'=>$email,
                    'phone'=>$phone
               ),array('id'=>$_SESSION['customer']));
               header('location: ./vnpay_php/index.php?order_id='.$_SESSION['order_id']);
          }
     }

?>