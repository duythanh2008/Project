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
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Giỏ hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                    <?php 
                        if (isset($_SESSION['cart'])){
                    ?>
                        <div class="row">
                            <div class="col l-10 l-o-1 m-12 c-12  wow fadeInUp"  data-wow-duration=".5s"  data-wow-delay=".1s">
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
                                                            <a style="text-decoration: none; color: var(--text-color);" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>">
                                                                <img src="<?php echo $value['img-link'] ?>" alt="" class="cart-product__img">
                                                                <div class="cart-product__info">
                                                                    <p class="cart-product__info-name"><?php echo $value['name'] ?></p>
                                                                    <p class="cart-product__info-size">Size: <?php echo $value['size'] ?></p>
                                                                    <p class="cart-product__info-price"><?php echo number_format($value['price']) ?>đ</p>
                                                                    <a href="?controller=xuligiohang&method=delete&id=<?php echo $value['id'] ?>" class="cart-product__info-remove">Xóa</a>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart-product__qty">
                                                        <a href="?controller=xuligiohang&method=prev&id=<?php echo $value['id'] ?>" class="cart-product__qty-btn">–</a>
                                                        <p class="cart-product__qty-info"><?php echo $value['sl'] ?></p>
                                                        <a href="?controller=xuligiohang&method=next&id=<?php echo $value['id'] ?>" class="cart-product__qty-btn">+</a>
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
                            <div class="col l-2 l-o-9 m-3 m-o-9 c-4 c-o-8 wow fadeInUp  data-wow-duration=".5s"  data-wow-delay=".2s"">
                                <div class="cart-product__total-price">
                                    <h3 class="cart-product__total-price-heading">Tổng thanh toán</h3>
                                    <p class="cart-product__total-price-money"><?php echo number_format($amount)?>đ</p>
                                    <a href="?controller=thanhtoan" class="cart-product__total-price-pay">Đặt hàng</a>
                                </div>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div style="margin: 80px 0 120px 0;" class="account__register">
                            <div class="row">
                                <div class="col l-12 m-12 c-12 wow fadeInUp" data-wow-duration=".5s">
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
</body>
</html>