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
                                        <a href="" class="header__navbar-category-link">
                                            Áo khoác
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="" class="header__navbar-category-link">
                                            Áo phông
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="" class="header__navbar-category-link">
                                            Quần dài
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="" class="header__navbar-category-link">
                                            Quần short
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="" class="header__navbar-category-link">
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
                                    <h4 class="header__navbar-cart-heading">Sản phẩm đã thêm</h4>
                                    <ul class="header__navbar-cart-list-item">
                                        <li class="header__navbar-cart-item">
                                            <img src="./Assets/Img/product-1.jpg" alt="" class="header__navbar-cart-img">
                                            <div class="header__navbar-cart-item-info">
                                                <div class="header__navbar-cart-item-head">
                                                    <h5 class="header__navbar-cart-item-name">Áo khoác đỏ</h5>
                                                    <div class="header__navbar-cart-item-price-wrap">
                                                        <span class="header__navbar-cart-item-price">2.000.000đ</span>
                                                        <span class="header__navbar-cart-item-multiply">x</span>
                                                        <span class="header__navbar-cart-item-quantity">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__navbar-cart-item-body">
                                                    <span class="header__navbar-cart-item-desc">
                                                        Size: S
                                                    </span>
                                                    <span class="header__navbar-cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <a href="?controller=giohang" class="header__navbar-cart-item-cart header__navbar-cart-item-cart-btn">Xem giỏ hàng</a>
                                    </ul>
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
                                        <a href="" class="header__navbar-category-link-mobile">
                                            Áo khoác
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="" class="header__navbar-category-link-mobile">
                                            Áo phông
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="" class="header__navbar-category-link-mobile">
                                            Quần dài
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="" class="header__navbar-category-link-mobile">
                                            Quần short
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="" class="header__navbar-category-link-mobile">
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
                       <a href="#" class="header__navbar-mobile-link-account" style="margin-right: 10px"> <?php echo $user[0]['username']?></a>
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
                <div style="margin-top: 20px" class="grid wide">
                    <div class="row">
                        <div class="col l-6 m-12 c-12">
                            <div class="product-detail__img">
                                <img src="./Assets/Img/gallery-1.jpg" class="product-detail__img-link" id="productImg">
                                <div class="small-img-row">
                                    <div class="small-img-col">
                                        <img src="./Assets/Img/gallery-1.jpg" width="100%" class="small-img">
                                    </div>
                                    <div class="small-img-col">
                                        <img src="./Assets/Img/gallery-2.jpg" width="100%" class="small-img">
                                    </div>
                                    <div class="small-img-col">
                                        <img src="./Assets/Img/gallery-3.jpg" width="100%" class="small-img">
                                    </div>
                                    <div class="small-img-col">
                                        <img src="./Assets/Img/gallery-4.jpg" width="100%" class="small-img">
                                    </div>
                              </div> 
                            </div>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="product-detail__info">
                                <div class="product-detail__info-link">
                                    <a href="?controller=trangchu" class="product-detail__info-link-pre1">Trang chủ</a> <p style="display: inline-block; font-size: 1.6rem;"> > &nbsp;&nbsp;</p>
                                    <a href="?controller=sanpham" class="product-detail__info-link-pre2">Sản phẩm</a> <p style="display: inline-block; font-size: 1.6rem;"> > &nbsp;&nbsp; </p>
                                </div>
                                <h3 class="product-detail__info-name">
                                    Áo khoác đỏ
                                </h3>
                                <div class="product-detail__info-catalog">
                                    <h4 class="product-detail__info-catalog-heading">Danh mục: </h4>
                                    <a href="#" class="product-detail__info-catalog-name">Áo khoác</a>
                                </div>
                                <div class="product-detail__info-status">
                                    <h4 class="product-detail__info-status-check">Tình trạng: </h4>
                                    <p class="product-detail__info-status-checkname">Còn hàng</p>
                                </div>
                                <p class="product-detail__info-price">1.000.000đ</p>
                                
                                <div class="product-detail__info-add-to-cart">
                                    <form action="#" method="post">
                                        <label for="qty" class="product-detail__info-qty-label">Số lượng: </label>
                                        <input type="number" name="qty" id="qty" class="product-detail__info-qty"><br>
                                        <input type="submit" value="Thêm vào giỏ hàng" class="product-detail__info-btn">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px" class="grid wide">
                    <div class="row">
                        <div class="col l-9 m-12 c-12">
                            <div class="tabs">
                                <div class="tab-item active">
                                    Mô tả
                                </div>
                                <div class="tab-item">
                                    Đánh giá
                                </div>
                                <div class="line"></div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <h3 class="product-detail__desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend consequat mauris at blandit. Suspendisse ullamcorper arcu id elit ornare finibus. Nunc vel interdum tortor, vel feugiat odio. Aenean lobortis erat rutrum pretium lobortis. Sed tempus est et velit placerat, nec facilisis ex sagittis. Curabitur eget turpis eget turpis porttitor tincidunt vitae cursus dolor. In nulla ante, pellentesque at dapibus in, finibus sit amet felis. Vivamus fringilla urna enim, sed sodales lorem ornare ut. Vestibulum pulvinar mauris odio, tristique convallis augue blandit ullamcorper. In eget placerat ex. Quisque ut fermentum tellus, in pellentesque odio. Aliquam justo turpis, tincidunt sit amet nisi a, facilisis fringilla erat. Donec vulputate tempor sem, vel tincidunt nibh consequat a. Integer aliquet, purus in fringilla tincidunt, turpis libero tempus dolor, et faucibus nisl justo eget mauris.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend consequat mauris at blandit. Suspendisse ullamcorper arcu id elit ornare finibus. Nunc vel interdum tortor, vel feugiat odio. Aenean lobortis erat rutrum pretium lobortis. Sed tempus est et velit placerat, nec facilisis ex sagittis. Curabitur eget turpis eget turpis porttitor tincidunt vitae cursus dolor. In nulla ante, pellentesque at dapibus in, finibus sit amet felis. Vivamus fringilla urna enim, sed sodales lorem ornare ut. Vestibulum pulvinar mauris odio, tristique convallis augue blandit ullamcorper. In eget placerat ex. Quisque ut fermentum tellus, in pellentesque odio. Aliquam justo turpis, tincidunt sit amet nisi a, facilisis fringilla erat. Donec vulputate tempor sem, vel tincidunt nibh consequat a. Integer aliquet, purus in fringilla tincidunt, turpis libero tempus dolor, et faucibus nisl justo eget mauris.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend consequat mauris at blandit. Suspendisse ullamcorper arcu id elit ornare finibus. Nunc vel interdum tortor, vel feugiat odio. Aenean lobortis erat rutrum pretium lobortis. Sed tempus est et velit placerat, nec facilisis ex sagittis. Curabitur eget turpis eget turpis porttitor tincidunt vitae cursus dolor. In nulla ante, pellentesque at dapibus in, finibus sit amet felis. Vivamus fringilla urna enim, sed sodales lorem ornare ut. Vestibulum pulvinar mauris odio, tristique convallis augue blandit ullamcorper. In eget placerat ex. Quisque ut fermentum tellus, in pellentesque odio. Aliquam justo turpis, tincidunt sit amet nisi a, facilisis fringilla erat. Donec vulputate tempor sem, vel tincidunt nibh consequat a. Integer aliquet, purus in fringilla tincidunt, turpis libero tempus dolor, et faucibus nisl justo eget mauris.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend consequat mauris at blandit. Suspendisse ullamcorper arcu id elit ornare finibus. Nunc vel interdum tortor, vel feugiat odio. Aenean lobortis erat rutrum pretium lobortis. Sed tempus est et velit placerat, nec facilisis ex sagittis. Curabitur eget turpis eget turpis porttitor tincidunt vitae cursus dolor. In nulla ante, pellentesque at dapibus in, finibus sit amet felis. Vivamus fringilla urna enim, sed sodales lorem ornare ut. Vestibulum pulvinar mauris odio, tristique convallis augue blandit ullamcorper. In eget placerat ex. Quisque ut fermentum tellus, in pellentesque odio. Aliquam justo turpis, tincidunt sit amet nisi a, facilisis fringilla erat. Donec vulputate tempor sem, vel tincidunt nibh consequat a. Integer aliquet, purus in fringilla tincidunt, turpis libero tempus dolor, et faucibus nisl justo eget mauris.
                                    </h3>
                                </div>
                            <div class="tab-pane">
                                <div class="product-detail__rating">
                                    <form action="#" method="post">
                                        <div class="product-detail__rating-item">
                                            <label for="fullname" class="product-detail__rating-label">Họ và tên</label>
                                            <input type="text" name="" id="fullname" placeholder="Họ và tên" class="product-detail__rating-input">
                                        </div>
                                        <div class="product-detail__rating-item">
                                            <label for="email" class="product-detail__rating-label">Email</label>
                                            <input type="email" name="" id="email" placeholder="Email" class="product-detail__rating-input">
                                        </div>
                                        <div class="product-detail__rating-item">
                                            <label for="content" class="product-detail__rating-label">Nội dung</label>
                                            <textarea type="email" name="" id="email" placeholder="Nội dung" class="product-detail__rating-textarea"></textarea>
                                        </div>
                                        <input type="submit" value="Gửi đánh giá" class="product-detail__rating-submit">
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col l-3 m-12 c-12">
                            <div class="product-relative">
                                <h3 class="product-relative__heading">Sản phẩm liên quan</h3>
                                <ul class="product-relative__list">
                                    <li class="product-relative__item">
                                        <a href="#" class="product-relative__item-link">
                                            <img src="./Assets/Img/gallery-1.jpg" alt="" class="product-relative__item-img">
                                            <div class="product-relative__item-info">
                                                <h3 class="product-relative__item-name">
                                                    Áo khoác đỏ
                                                </h3>
                                                <h3 class="product-relative__item-price">
                                                    1.000.000đ
                                                </h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product-relative__item">
                                        <a href="#" class="product-relative__item-link">
                                            <img src="./Assets/Img/gallery-1.jpg" alt="" class="product-relative__item-img">
                                            <div class="product-relative__item-info">
                                                <h3 class="product-relative__item-name">
                                                    Áo khoác đỏ
                                                </h3>
                                                <h3 class="product-relative__item-price">
                                                    1.000.000đ
                                                </h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product-relative__item">
                                        <a href="#" class="product-relative__item-link">
                                            <img src="./Assets/Img/gallery-1.jpg" alt="" class="product-relative__item-img">
                                            <div class="product-relative__item-info">
                                                <h3 class="product-relative__item-name">
                                                    Áo khoác đỏ
                                                </h3>
                                                <h3 class="product-relative__item-price">
                                                    1.000.000đ
                                                </h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product-relative__item">
                                        <a href="#" class="product-relative__item-link">
                                            <img src="./Assets/Img/gallery-1.jpg" alt="" class="product-relative__item-img">
                                            <div class="product-relative__item-info">
                                                <h3 class="product-relative__item-name">
                                                    Áo khoác đỏ
                                                </h3>
                                                <h3 class="product-relative__item-price">
                                                    1.000.000đ
                                                </h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product-relative__item">
                                        <a href="#" class="product-relative__item-link">
                                            <img src="./Assets/Img/gallery-1.jpg" alt="" class="product-relative__item-img">
                                            <div class="product-relative__item-info">
                                                <h3 class="product-relative__item-name">
                                                    Áo khoác đỏ
                                                </h3>
                                                <h3 class="product-relative__item-price">
                                                    1.000.000đ
                                                </h3>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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
    <script type="text/javascript" src="./Assets/JS/product.js"></script>
    <script type="text/javascript" src="./Assets/JS/tabs.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>