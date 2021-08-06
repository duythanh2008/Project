<?php 
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    $id = $_GET['id'];
    $product = $database->get('product',array('id'=>$id));
    $catalog = $database->get('catalog',array('id'=>$product[0]['catalog']));
    $product_relative = $database->get_limit('product',array('catalog'=>$product[0]['catalog']),5);
    if (isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        $rating = $_POST['rating'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y/m/d H:i:s', time());
        if (isset($_SESSION['customer'])){
            $database->insert('rating',array(
                'product_id'=>$id,
                'rate'=>$rating,
                'fullname'=>$fullname,
                'email'=>$email,
                'content'=>$content,
                'time_rate'=>$date,
                'user_id'=>$_SESSION['customer'],
                'status'=>0
            ));
            // $database->update('product',array(
            //     'total_rate'=>$product[0]['total_rate'] + $rating,
            //     'rate_times'=>$product[0]['rate_times'] + 1
            // ),array('id'=>$id));
            echo "<script type='text/javascript'>alert('Đánh giá thành công');</script>";
            header('refresh:0.1;url=?controller=chitietsanpham&id='.$id);
        }else{
            echo "<script type='text/javascript'>alert('Bạn phải đăng nhập tài khoản để có thể đánh giá !');</script>";
            header('refresh:0.1;url=?controller=dangnhap');
        }
    }
?>