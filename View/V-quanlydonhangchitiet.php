<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Assets/Img/logo.png">
    <link rel="stylesheet" href="./Assets/Css/grid.css">
    <link rel="stylesheet" href="./Assets/Css/base.css">
    <link rel="stylesheet" href="./Assets/Css/main.css">
    <link rel="stylesheet" href="./Assets/Css/responsive.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
    <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/Fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Fashion GenZ</title>
    <style>
        <?php if ($admin[0]['lv'] == 2){ ?>
        #menu1{
            display: none;
        }
        <?php } ?>
    </style>
</head>
<body>
    <div class="grid">
        <div class="row no-gutters">
            <div class="col l-2 m-0 c-0">
                <?php include('./View/menu-admin.php') ?>
            </div>
            <div class="col l-10 m-12 c-12">
                <?php include('./View/header-admin.php') ?>
                <div class="admin-content">
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <h3 class="admin-content__heading wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Đơn hàng số #<?php echo $id ?></h3><br>
                            <div class="result-detail wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                <?php if (isset($error['product'])){?> 
                                            <p><?php echo $error['product']; ?></p>
                                <?php } ?>
                                <?php if (isset($error['detail'])){?> 
                                            <p><?php echo $error['detail']; ?></p>
                                <?php } ?>
                            </div>
                            <div style="margin: 0 3px;" class="row">
                                <div class="col l-3 m-12 c-12">
                                    <div class="package__info-user wow fadeInLeft" data-wow-duration=".5s"  data-wow-delay=".2s">
                                        <h3 class="package__info-user-heading">Thông tin khách hàng</h3>
                                        <p class="package__info-user-show">Họ và tên: <?php echo $customer[0]['fullname'] ?></p>
                                        <p class="package__info-user-show">Số điện thoại: <?php echo $customer[0]['phone'] ?></p>
                                        <p class="package__info-user-show">Địa chỉ: <?php echo $customer[0]['address'] ?></p>
                                        <p class="package__info-user-show">Email: <?php echo $customer[0]['email'] ?></p>
                                        <p class="package__info-user-show">Ngày đặt: <?php echo $customer[0]['time_order'] ?></p>
                                        <p class="package__info-user-show">Ngày giao: <?php echo $customer[0]['time_delivered'] ?></p>
                                        <p class="package__info-user-show">Tổng tiền: <?php echo number_format($customer[0]['amount']) ?>đ</p>
                                    </div>
                                </div>
                                <div class="col l-9 m-12m c-12 wow fadeInRight" data-wow-duration=".5s"  data-wow-delay=".2s">
                                    <h3 class="package__info-user-heading">Thông tin sản phẩm</h3>
                                    <div class="cart-table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Tổng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach ($customer_detail as $key => $value){
                                                    $product_detail = $database->get('product',array('id'=>$value['product_id']));
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <div class="cart-product">
                                                                <img src="<?php echo $product_detail[0]['image'] ?>" alt="" class="cart-product__img">
                                                                <div class="cart-product__info">
                                                                    <p class="cart-product__info-name"><?php echo $product_detail[0]['name'] ?></p>
                                                                    <p class="cart-product__info-size">Size: <?php echo $value['size'] ?></p>
                                                                    <p class="cart-product__info-price"><?php echo number_format($value['price']) ?>đ</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="cart-product__qty">
                                                                <p class="cart-product__qty-info"><?php echo $value['qty'] ?></p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="cart-product__total"><?php echo number_format($value['amount']) ?>đ</p>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                        <?php if ($customer[0]['status']==0){ ?>
                                            <a class="confirm-package_btn" href="?controller=xulidonhangchitiet&id=<?php echo $id ?>">Duyệt</a>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>