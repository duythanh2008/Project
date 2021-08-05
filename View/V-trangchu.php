<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Assets/Img/logo.png">
    <link rel="stylesheet" href="./Assets/Css/grid.css">
    <link rel="stylesheet" href="./Assets/Css/responsive.css">
    <link rel="stylesheet" href="./Assets/Css/base.css">
    <link rel="stylesheet" href="./Assets/Css/main.css">
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
                                            </div>
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
                        <a href="?controller=sanpham"" class="header__navbar-mobile-link">Sản phẩm</a>
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
                        <a href="?controller=lienhe" class="header__navbar-mobile-link">Liên hệ</a>
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
                <div class="slider">
                    <div class="grid wide">
                    <div class="slideshow-container">
                        <div class="mySlider fade">
                            <img src="./Assets/Img/slide1.jpg" style="width:100%" />
                        </div>
                        <div class="mySlider fade">
                            <img src="./Assets/Img/slide2.jpg" style="width:100%" />
                        </div>
                        <div class="mySlider fade">
                            <img src="./Assets/Img/slide3.jpg" style="width:100%" />
                        </div>
                        <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
                        <a class="next" onclick="plusDivs(1)">&#10095;</a>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="grid wide">
                        <div class="banner__img">
                            <img src="./Assets/Img/banner.jpg" alt="" class="banner__img-link">
                        </div>
                    </div>
                </div>
                <div class="home-product">
                    <div class="grid wide">
                    <form>
                        <input type="hidden" name="controller" value="trangchu">
                        <input
                            style="     width: 97%;
                                        height:45px;
                                        margin: 20px 0 0 1.5%;
                                        padding-left: 16px;
                                        font-size: 18px;
                                        font-weight:bold;
                                        border: 2px solid var(--primary-color);
                                        outline: none;"
                        type="search" name="keyword" placeholder="Tìm sản phẩm ... "  value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
                    </form>
                        <?php if (isset($_GET['keyword']) &&  $_GET['keyword'] != ''){?>
                            <h3 class="home-product__heading-search">
                                Kết quả tìm kiếm của "<?php echo $_GET['keyword'] ?>"
                            </h3>
                            <div class="row sm-gutter">
                                <?php foreach ($product as $key => $value){ ?>
                                <div class="col l-2-4 m-4 c-6">
                                    <div class="home-product-item">
                                        <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                            <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                            <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                            <div class="hone-product-item__price">
                                                <span class="home-product-item__price-current">
                                                <?php echo number_format($value['price']) ?>đ
                                                </span>
                                            </div>
                                            <div class="home-product-item__favourite">
                                                    <i class="fas fa-check"></i>
                                                    <span>Yêu thích</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        <?php }else{?>
                        <h3 class="home-product__heading">
                            Sản phẩm nổi bật
                        </h3>
                        <div class="row sm-gutter">
                            <?php foreach ($product1 as $key => $value){ ?>
                            <div class="col l-2-4 m-4 c-6">
                                <div class="home-product-item">
                                    <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                        <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                        <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                        <div class="hone-product-item__price">
                                            <span class="home-product-item__price-current">
                                            <?php echo number_format($value['price']) ?>đ
                                            </span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                                <i class="fas fa-check"></i>
                                                <span>Yêu thích</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php foreach ($product2 as $key => $value){ ?>
                            <div class="col l-2-4 m-4 c-6">
                                <div class="home-product-item">
                                    <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                        <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                        <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                        <div class="hone-product-item__price">
                                            <span class="home-product-item__price-current">
                                            <?php echo number_format($value['price']) ?>đ
                                            </span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                                <i class="fas fa-check"></i>
                                                <span>Yêu thích</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php foreach ($product3 as $key => $value){ ?>
                            <div class="col l-2-4 m-4 c-6">
                                <div class="home-product-item">
                                    <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                        <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                        <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                        <div class="hone-product-item__price">
                                            <span class="home-product-item__price-current">
                                            <?php echo number_format($value['price']) ?>đ
                                            </span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                                <i class="fas fa-check"></i>
                                                <span>Yêu thích</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Tab items -->
                <div class="grid wide">
                    <div class="banner__img">
                            <img style="filter: brightness(180%); margin-top: 25px" src="./Assets/Img/banner2.jpg" alt="" class="banner__img-link">
                        </div>
                    <h3 class="home-catalog__heading">
                            Danh mục sản phẩm
                    </h3>
                    
                    <div class="tab">
                        <button class="tablinks active" onclick="catalog(event, 'Aokhoac')">Áo khoác</button>
                        <button class="tablinks" onclick="catalog(event, 'Aophong')">Áo phông</button>
                        <button class="tablinks" onclick="catalog(event, 'Quandai')">Quần dài</button>
                        <button class="tablinks" onclick="catalog(event, 'Quanshort')">Quần short</button>
                        <button class="tablinks" onclick="catalog(event, 'Giaydep')">Giày, dép</button>
                        </div>

                        <div id="Aokhoac" class="tabcontent active">
                            <div class="row">
                                <?php foreach ($product4 as $key => $value){ ?>
                                    <div class="col l-2-4 m-4 c-6">
                                    <div class="home-product-item">
                                        <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                            <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                            <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                            <div class="hone-product-item__price">
                                                <span class="home-product-item__price-current">
                                                 <?php echo number_format($value['price']) ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="Aophong" class="tabcontent">
                            <div class="row">
                                <?php foreach ($product1 as $key => $value){ ?>
                                    <div class="col l-2-4 m-4 c-6">
                                        <div class="home-product-item">
                                            <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                                <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                                <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                                <div class="hone-product-item__price">
                                                    <span class="home-product-item__price-current">
                                                    <?php echo number_format($value['price']) ?>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="Quandai" class="tabcontent">
                            <div class="row">
                                <?php foreach ($product2 as $key => $value){ ?>
                                    <div class="col l-2-4 m-4 c-6">
                                        <div class="home-product-item">
                                            <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                                <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                                <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                                <div class="hone-product-item__price">
                                                    <span class="home-product-item__price-current">
                                                    <?php echo number_format($value['price']) ?>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="Quanshort" class="tabcontent">
                            <div class="row">
                                <?php foreach ($product3 as $key => $value){ ?>
                                    <div class="col l-2-4 m-4 c-6">
                                        <div class="home-product-item">
                                            <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                                <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                                <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                                <div class="hone-product-item__price">
                                                    <span class="home-product-item__price-current">
                                                    <?php echo number_format($value['price']) ?>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="Giaydep" class="tabcontent">
                            <div class="row">
                                <?php foreach ($product5 as $key => $value){ ?>
                                    <div class="col l-2-4 m-4 c-6">
                                        <div class="home-product-item">
                                            <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                                <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                                <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                                <div class="hone-product-item__price">
                                                    <span class="home-product-item__price-current">
                                                    <?php echo number_format($value['price']) ?>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
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
        <script type="text/javascript" src="./Assets/JS/tabs.js"></script>
        <script type="text/javascript" src="./Assets/JS/slide.js"></script>
        <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>