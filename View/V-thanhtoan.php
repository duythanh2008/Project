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
                <div class="contact">
                    <div class="grid">
                        <div class="account__location">
                            <div>
                                <a class="accout__location-home" href="?controller=trangchu">Trang chủ</a>
                            </div>
                            <div>
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Đặt hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                    <?php 
                        if (isset($_SESSION['cart'])){
                    ?>
                        <div class="row">
                            <div class="col l-10 l-o-1 m-12 c-12 wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">
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
                                                $amount=0;
                                                if(isset($_SESSION['cart'])){
                                                    foreach ($_SESSION['cart'] as $key => $value){
                                                    $amount +=$value['sl']*$value['price'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="cart-product">
                                                            <img src="<?php echo $value['img-link'] ?>" alt="" class="cart-product__img">
                                                            <div class="cart-product__info">
                                                                <p class="cart-product__info-name"><?php echo $value['name'] ?></p>
                                                                <p class="cart-product__info-size">Size: <?php echo $value['size'] ?></p>
                                                                <p class="cart-product__info-price"><?php echo number_format($value['price']) ?>đ</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart-product__qty">
                                                            <p class="cart-product__qty-info"><?php echo $value['sl'] ?></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="cart-product__total"><?php echo number_format($value['sl']*$value['price']) ?>đ</p>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="result-detail wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                <?php if (isset($error['message'])){?> 
                                            <p><?php echo $error['message']; ?></p>
                                <?php } ?>
                                <?php if (isset($error['detail'])){?> 
                                            <p><?php echo $error['detail']; ?></p>
                                <?php } ?>
                            </div>
                        <div class="row">
                            <div class="col l-10 l-o-1 m-12 c-12">
                                <form action="?controller=xulithanhtoan" class="js-form-payment" method="post">
                                    <div class="cart-product__pay wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                                        <h3 class="cart-product__pay-heading">Thông tin thanh toán</h3>
                                        <div class="row">
                                            <div class="col l-6 m-12 c-12">
                                                <div class="cart-product__pay-item">
                                                    <label for="fullname" class="cart-product__pay-item-label">Họ và tên</label>
                                                    <input type="text" name="fullname" value="<?php if (isset($_SESSION['customer'])){ echo $user[0]['fullname']; }?>" id="fullname" class="cart-product__pay-item-input" required>
                                                </div>
                                                <div class="cart-product__pay-item">
                                                    <label for="email" class="cart-product__pay-item-label">Email</label>
                                                    <input type="email" name="email" value="<?php if (isset($_SESSION['customer'])){ echo $user[0]['email']; }?>" id="email" class="cart-product__pay-item-input" required>
                                                </div>
                                            </div>
                                            <div class="col l-6 m-12 c-12">
                                                <div class="cart-product__pay-item">
                                                    <label for="address" class="cart-product__pay-item-label">Địa chỉ</label>
                                                    <input type="text" name="address" value="<?php if (isset($_SESSION['customer'])){ echo $user[0]['address']; }?>" id="address" class="cart-product__pay-item-input" required>
                                                </div>
                                                <div class="cart-product__pay-item">
                                                    <label for="phone" class="cart-product__pay-item-label">Số điện thoại</label>
                                                    <input type="text" name="phone" value="<?php if (isset($_SESSION['customer'])){ echo $user[0]['phone']; }?>" id="phone" class="cart-product__pay-item-input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <h3 class="cart-product__pay-heading">Phương thức thanh toán</h3>
                                        <input type="radio" id="checked" checked>
                                        <label class="pay-method" for="checked">&nbsp;&nbsp;&nbsp;Thanh toán khi nhận hàng</label> -->
                                    </div>
                                    <div class="cart-product__pay-total-price wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                                        <h3 class="cart-product__pay-total-price-heading">Tổng thanh toán</h3>
                                        <p class="cart-product__pay-total-price-money"><?php echo number_format($amount)?>đ</p>
                                        <div>
                                            <input type="hidden" name="payment-cart" class="js-input-payment" value="payment">
                                            <button type="button" name="confirm" value="payment-cart" class="cart-product__pay-total-price-pay js-payment-cart">Đặt hàng</button>
                                            <button type="button" name="confirm-online" value="payment-cart-online" class="cart-product__pay-total-price-pay js-payment-cart-online">Đặt hàng và thanh toán</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div style="margin: 80px 0 120px 0;" class="account__register">
                            <div class="row">
                                <div class="col l-12 m-12 c-12">
                                    <div class="cart__info">
                                        <img src="./Assets/Img/no_cart.png" alt="" class="cart__info-no-cart-img">
                                        <h3 class="cart__info-no-cart-content">Chưa có sản phẩm</h3>
                                    </div>
                                    <a href="?controller=trangchu" class="cart__info-no-cart-btn">Quay lại trang chủ</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>   
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
    <script>
        $(function() {
            $('.js-payment-cart').click(function() {
                let pay = $(this).val();
                $('.js-input-payment').val(pay);
                $('.js-form-payment').submit();
            })
            $('.js-payment-cart-online').click(function() {
                let pay = $(this).val();
                $('.js-input-payment').val(pay);
                $('.js-form-payment').submit();
            })
        })
    </script>
</body>
</html>