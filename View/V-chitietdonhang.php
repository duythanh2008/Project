<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Assets/Img/logo.png">
    <link rel="stylesheet" href="./Assets/Css/grid.css">
    <link rel="stylesheet" href="./Assets/Css/main.css">
    <link rel="stylesheet" href="./Assets/Css/base.css">
    <link rel="stylesheet" href="./Assets/Css/responsive.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
    <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=841263506490089&autoLogAppEvents=1" nonce="NwgDKUNE"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/Fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Fashion GenZ</title>
</head>
<body>
        <div class="app">
            <?php include('./View/header.php') ?>
            <div class="content">
                <div class="account">
                    <div class="grid">
                        <div class="account__location">
                            <div>
                                <a class="accout__location-home" href="?controller=trangchu">Trang chủ</a>
                            </div>
                            <div>
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Đơn hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                        <div class="row">
                            <div class="col l-12 m-12 c-12">
                            <div class="account__heading">Kiểm tra đơn hàng</div>
                                <div style="margin-top: 20px; margin-bottom: 50px;" class="row">
                                    <div class="col l-3 m-12 c-12 wow fadeInLeft" data-wow-duration=".5s">
                                        <div class="package__info-user">
                                            <h3 class="package__info-user-heading">Thông tin khách hàng</h3>
                                            <p class="package__info-user-show">Họ và tên: <?php echo $package[0]['fullname'] ?></p>
                                            <p class="package__info-user-show">Số điện thoại: <?php echo $package[0]['phone'] ?></p>
                                            <p class="package__info-user-show">Địa chỉ: <?php echo $package[0]['address'] ?></p>
                                            <p class="package__info-user-show">Email: <?php echo $package[0]['email'] ?></p>
                                            <p class="package__info-user-show">Ngày đặt: <?php echo $package[0]['time_order'] ?></p>
                                            <p class="package__info-user-show">Ngày giao: <?php echo $package[0]['time_delivered'] ?></p>
                                            <p class="package__info-user-show">Tổng tiền: <?php echo number_format($package[0]['amount']) ?>đ</p>
                                        </div>
                                    </div>
                                    <div class="col l-9 m-12m c-12 wow fadeInRight" data-wow-duration=".5s">
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
                                                        foreach ($package_details as $key => $value){
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('./View/footer.php'); ?>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>


        <script>
                                                    window.fbAsyncInit = function() {
                                                        FB.init({
                                                            appId: "1784956665094089",
                                                            xfbml: true,
                                                            version: "v2.6"
                                                        });
                                                    };
                                                    (function(d, s, id){
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id)) { return; }
                                                        js = d.createElement(s); js.id = id;
                                                        js.src = "//connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }(document, 'script', 'facebook-jssdk'));
                                                </script>
                                                <div class="fb-customerchat" page_id="138799094994489"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>