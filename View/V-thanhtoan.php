<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Assets/Img/logo.png">
    <link rel="stylesheet" href="./Assets/Css/grid.css">
    <link rel="stylesheet" href="./Assets/Css/responsive.css">
    <link rel="stylesheet" href="./Assets/Css/main.css">
    <link rel="stylesheet" href="./Assets/Css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/Fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Fashion GenZ</title>
</head>
<body>
        <div class="app">
            <header class="header">
                <div class="grid wide">
                    <nav class="header__navbar">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item">
                                <a href="?controller=trangchu">
                                    <img src="./Assets/Img/logo.png" alt="" class="header__navbar-logo">
                                </a>
                            </li>
                        </ul>
                        <ul class="header__navbar-list hide-on-mobile-tablet">
                            <li class="header__navbar-item">
                                <a href="?controller=trangchu" class="header__navbar-link">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="header__navbar-item header__navbar-item-has-category">
                                <a href="?controller=sanpham" class="header__navbar-link">
                                    Sản phẩm
                                </a>
                                <ul class="header__navbar-category-product">
                                    <li class="header__navbar-category-item">
                                        <a href="?controller=sanpham&id=1" class="header__navbar-category-link">
                                            Áo khoác
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="?controller=sanpham&id=2" class="header__navbar-category-link">
                                            Áo phông
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="?controller=sanpham&id=3" class="header__navbar-category-link">
                                            Quần dài
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="?controller=sanpham&id=4" class="header__navbar-category-link">
                                            Quần short
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="?controller=sanpham&id=5" class="header__navbar-category-link">
                                            Giày, dép
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__navbar-item">
                                <a href="?controller=lienhe" class="header__navbar-link">
                                    Liên hệ
                                </a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="?controller=donhang" class="header__navbar-link">
                                    Đơn hàng
                                </a>
                            </li>
                            <?php
                                if(isset($_SESSION['customer']) && $_SESSION['customer'] != NULL){
                            ?>
                            <li class="header__navbar-item">
                               <a href="?controller=thongtinkhachhang" style="margin-left: 12px;
                                                  text-decoration: none;
                                                  padding: 0 6px;
                                                  font-size: 1.5rem;
                                                  color: var(--white-color);"> <?php echo $user[0]['username']?></a><a href="?controller=dangxuat" style="margin-left: 1px;" class="header__navbar-link">Thoát</a>
                            </li>
                            <?php }else{ ?>
                            <li class="header__navbar-item">
                                <a href="?controller=dangnhap" class="header__navbar-link">
                                    Tài khoản
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <div class="header__navbar-cart">
                            <div class="header__navbar-cart-wrap">
                            <span class="header__navbar-cart-qty"><?php echo $_SESSION['qty'] ?></span>
                                    <a href="?controller=giohang" class="header__navbar-cart-link">
                                        <i class="header__navbar-cart-icon fas fa-shopping-cart"></i>
                                        Giỏ hàng
                                    </a>
                                    <div class="header__navbar-cart-list">
                                        <?php if (isset($_SESSION['cart'])){?>
                                        <h4 class="header__navbar-cart-heading">Sản phẩm đã thêm</h4>
                                        <ul class="header__navbar-cart-list-item">
                                            <?php foreach ($_SESSION['cart'] as $key => $value){?>
                                            <li class="header__navbar-cart-item">
                                                <a style="text-decoration: none;" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>">
                                                    <img src="<?php echo $value['img-link'] ?>" alt="" class="header__navbar-cart-img">
                                                    <div class="header__navbar-cart-item-info">
                                                        <div class="header__navbar-cart-item-head">
                                                            <h5 class="header__navbar-cart-item-name"><?php echo $value['name'] ?></h5>
                                                            <div class="header__navbar-cart-item-price-wrap">
                                                                <span class="header__navbar-cart-item-price"><?php echo number_format($value['price']) ?>đ</span>
                                                                <span class="header__navbar-cart-item-multiply">x</span>
                                                                <span class="header__navbar-cart-item-quantity"><?php echo $value['sl'] ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="header__navbar-cart-item-body">
                                                            <span class="header__navbar-cart-item-desc">
                                                                Size: <?php echo $value['size'] ?>
                                                            </span>
                                                            <a href="?controller=xuligiohang&method=delete&id=<?php echo $value['id'] ?>" class="header__navbar-cart-item-remove">Xóa</a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <a href="?controller=giohang" class="header__navbar-cart-item-cart header__navbar-cart-item-cart-btn">Xem giỏ hàng</a>
                                        <?php }else{ ?>
                                        <div class="header__navbar-no-cart-item">
                                            <img src="./Assets/Img/no_cart.png" alt="" class="header__navbar-cart-no-cart-img">
                                            <h3 class="header__navbar-cart-no-cart-content">Chưa có sản phẩm</h3>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <label for="nav__mobile-input" class="header__navbar-mobile-bars">       
                                <i class="fas fa-bars"></i>
                            </label>
                        </div>
                    </nav>
                </div>
            </header>
            <input type="checkbox" hidden class="nav__mobile-input" id="nav__mobile-input">
            <label for="nav__mobile-input" class="header__navbar-mobile-overlay"></label>
            <nav class="header__navbar-mobile">
                <label for="nav__mobile-input" class="header__navbar-mobile-close">                    
                    <i class="fas fa-times"></i>
                </label>
                <ul class="header__navbar-mobile-list">
                    <li>
                        <a href="?controller=trangchu" class="header__navbar-mobile-link">Trang chủ</a>
                    </li>
                    <li>
                        <a href="?controller=sanpham" class="header__navbar-mobile-link">Sản phẩm</a>
                        <ul class="header__navbar-category-product-mobile">
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="?controller=sanpham&id=1" class="header__navbar-category-link-mobile">
                                            Áo khoác
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="?controller=sanpham&id=2" class="header__navbar-category-link-mobile">
                                            Áo phông
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="?controller=sanpham&id=3" class="header__navbar-category-link-mobile">
                                            Quần dài
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="?controller=sanpham&id=4" class="header__navbar-category-link-mobile">
                                            Quần short
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="?controller=sanpham&id=5" class="header__navbar-category-link-mobile">
                                            Giày, dép
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    <li>
                        <a href="" class="header__navbar-mobile-link">Liên hệ</a>
                    </li>
                    <li>
                        <a href="?controller=donhang" class="header__navbar-mobile-link">Đơn hàng</a>
                    </li>
                    <?php
                        if(isset($_SESSION['customer']) && $_SESSION['customer'] != NULL){
                    ?>
                    <li>
                       <a href="?controller=thongtinkhachhang" class="header__navbar-mobile-link-account" style="margin-right: 10px"> <?php echo $user[0]['username']?></a>
                       <a href="?controller=dangxuat" class="header__navbar-mobile-link-account">Thoát</a>
                    </li>
                    <?php }else{ ?>
                    <li>
                        <a href="?controller=dangnhap" class="header__navbar-mobile-link">
                            Tài khoản
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
            <div class="content">
                <div class="contact">
                    <div class="grid">
                        <div class="account__location">
                            <div>
                                <a class="accout__location-home" href="?controller=trangchu">Trang chủ</a>
                            </div>
                            <div>
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Thanh toán</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                    <?php 
                        if (isset($_SESSION['cart'])){
                    ?>
                        <div class="row">
                            <div class="col l-10 l-o-1 m-12 c-12">
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
                        <div class="result-detail">
                                <?php if (isset($error['message'])){?> 
                                            <p><?php echo $error['message']; ?></p>
                                <?php } ?>
                                <?php if (isset($error['detail'])){?> 
                                            <p><?php echo $error['detail']; ?></p>
                                <?php } ?>
                            </div>
                        <div class="row">
                            <div class="col l-10 l-o-1 m-12 c-12">
                                <form action="?controller=xulithanhtoan" method="post">
                                    <div class="cart-product__pay">
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
                                        <h3 class="cart-product__pay-heading">Phương thức thanh toán</h3>
                                        <input type="radio" id="checked" checked>
                                        <label class="pay-method" for="checked">&nbsp;&nbsp;&nbsp;Thanh toán khi nhận hàng</label>
                                    </div>
                                    <div class="cart-product__pay-total-price">
                                        <h3 class="cart-product__pay-total-price-heading">Tổng thanh toán</h3>
                                        <p class="cart-product__pay-total-price-money"><?php echo number_format($amount)?>đ</p>
                                        <input type="submit" name="confirm" value="Thanh toán" class="cart-product__pay-total-price-pay">
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
            <footer class="footer">
            <div class="grid wide footer__content">
                    <div class="row">
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">Liên hệ</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <p class="footer__list-item-link">Địa chỉ: Số 1 Hoàng Đạo Thúy, Nhân Chính, Thanh Xuân, Hà Nội</p>
                                </li>
                                <li class="footer__list-item">
                                    <p class="footer__list-item-link">Mail: contact@fashiongenz.com</p>
                                </li>
                                <li class="footer__list-item">
                                    <p class="footer__list-item-link">Hotline: 0987654321</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Trung tâm trợ giúp</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Hướng dẫn mua hàng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">Giới thiệu</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Giới thiệu</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Tuyển dụng</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Điều khoản Fashion GenZ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">Danh mục</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Áo phông</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Áo khoác</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Quần short</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Quần dài</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Giày, dép</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">Theo dõi chúng tôi</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link"><i class="footer__list-item-icon fab fa-facebook"></i> Facebook</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link"><i class="footer__list-item-icon fab fa-instagram"></i> Instagram</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link"><i class="footer__list-item-icon fab fa-linkedin"></i> LinkedIn</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__copryright">
                    <div class="grid wide">
                        <div class="row">
                            <p class="footer__copryright-text">© 2021 - Bản quyền thuộc về Fashion GenZ</p>
                        </div>
                    </div>
                </div>
            </footer>
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