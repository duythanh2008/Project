<?php
    session_start();
    require_once '../Model/M-database.php';
    $database = new database();
    include('../Assets/PHPMailer/class.smtp.php');
    include('../Assets/PHPMailer/class.phpmailer.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>VNPAY RESPONSE</title>
        <!-- Bootstrap core CSS -->
        <link href="./assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="./assets/jumbotron-narrow.css" rel="stylesheet">         
        <script src="./assets/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <?php
        require_once("./config.php");
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        ?>
        <!--Begin display -->
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">VNPAY RESPONSE</h3>
            </div>
            <div class="table-responsive">
                <div class="form-group">
                    <label >Mã đơn hàng:</label>

                    <label><?php echo $_GET['vnp_TxnRef'] ?></label>
                </div>    
                <div class="form-group">

                    <label >Số tiền:</label>
                    <label><?php echo number_format($_GET['vnp_Amount']/100) ?>VND</label>
                </div>  
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                    <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã phản hồi (vnp_ResponseCode):</label>
                    <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã GD Tại VNPAY:</label>
                    <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã Ngân hàng:</label>
                    <label><?php echo $_GET['vnp_BankCode'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Thời gian thanh toán:</label>
                    <label><?php echo $_GET['vnp_PayDate'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Kết quả:</label>
                    <label>
                        <?php
                        if ($secureHash == $vnp_SecureHash) {
                            if ($_GET['vnp_ResponseCode'] == '00') {
                                $order_id = $_GET['vnp_TxnRef'];
                                $money = $_GET['vnp_Amount']/100;
                                $note = $_GET['vnp_OrderInfo'];
                                $vnp_response_code = $_GET['vnp_ResponseCode'];
                                $code_vnpay = $_GET['vnp_TransactionNo'];
                                $code_bank = $_GET['vnp_BankCode'];
                                $time = $_GET['vnp_PayDate'];
                                $date_time = substr($time, 0, 4) . '-' . substr($time, 4, 2) . '-' . substr($time, 6, 2) . ' ' . substr($time, 8, 2) . ' ' . substr($time, 10, 2) . ' ' . substr($time, 12, 2);
                                $data_payments = $database->get('payments',array('order_id'=>$order_id));
                                
                                if (count($data_payments) > 0) {
                                    $database->update('payments',array(
                                        'order_id'=>$order_id,
                                        'money'=>$money,
                                        'note'=>$note,
                                        'vnp_response_code'=>$vnp_response_code,
                                        'code_vnpay'=>$code_vnpay,
                                        'code_bank'=>$code_bank
                                    ),array('order_id'=>$order_id));
                                } else {
                                    $database->insert('payments',array(
                                        'order_id'=>$order_id,
                                        'money'=>$money,
                                        'note'=>$note,
                                        'vnp_response_code'=>$vnp_response_code,
                                        'code_vnpay'=>$code_vnpay,
                                        'code_bank'=>$code_bank,
                                        'time'=>$time
                                    ));
                                }
                                $id = $_SESSION['customer'];
                                $data_user = $database->get('user_info', array('id'=>$id));
                                $title = "Đặt hàng thành công";
                                $content = "Đơn hàng của bạn sẽ được xác nhận
                                <br>Cảm ơn vì đã chọn dịch vụ của Fashion GenZ<br>";
                                $content.= '<p style="margin: 5px 0">Họ và tên: '.$_SESSION['fullname'].'</p>';
                                        $content.= '<p style="margin: 5px 0">Số điện thoại: '.$_SESSION['phone'].'</p>';
                                        $content.= '<p style="margin: 5px 0">Địa chỉ: '.$_SESSION['address'].'</p>';
                                        $content.= '<p style="margin: 5px 0">Mã đơn hàng: '.$_SESSION['order_id'].'</p>';
                                        $content.= '<p style="margin: 5px 0">Tổng tiền: '.number_format($_SESSION['amount']).'đ ( Đã thanh toán )</p>';
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
                                echo "<span style='color:blue'>GD Thanh cong</span>";
                            } else {
                                echo "<span style='color:red'>GD Khong thanh cong</span>";
                            }
                        } else {
                            echo "<span style='color:red'>Chu ky khong hop le</span>";
                        }
                        ?>
                    </label><br><br>
                    <a style='color:black; text-decoration:none; font-weight: 400' href="../index.php"><label style="cursor: pointer;">Trở về trang chủ</label></a>
                </div> 
            </div>
            <p>
                &nbsp;
            </p>
            <footer class="footer">
                   <p>&copy; VNPAY <?php echo date('Y')?></p>
            </footer>
        </div>  
    </body>
</html>
