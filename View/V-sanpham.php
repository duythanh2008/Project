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
                                            Quần âu
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item">
                                        <a href="" class="header__navbar-category-link">
                                            Quần đùi
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
                                <a href="" class="header__navbar-link">
                                    Tin tức
                                </a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-link">
                                    Liên hệ
                                </a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="?controller=dangnhap" class="header__navbar-link">
                                    Tài khoản
                                </a>
                            </li>
                        </ul>
                        <div class="header__navbar-cart">
                            <a href="" class="header__navbar-cart-link">
                                <i class="header__navbar-cart-icon fas fa-shopping-cart"></i>
                                Giỏ hàng
                            </a>
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
                                            Quần âu
                                        </a>
                                    </li>
                                    <li class="header__navbar-category-item-mobile">
                                        <a href="" class="header__navbar-category-link-mobile">
                                            Quần đùi
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
                        <a href="" class="header__navbar-mobile-link">Tin tức</a>
                    </li>
                    <li>
                        <a href="" class="header__navbar-mobile-link">Liên hệ</a>
                    </li>
                    <li>
                        <a href="?controller=dangnhap" class="header__navbar-mobile-link">Tài khoản</a>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <div class="product">
                    <div class="grid">
                        <div class="account__location">
                            <div>
                                <a class="accout__location-home" href="?controller=trangchu">Trang chủ</a>
                            </div>
                            <div>
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Sản phẩm</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                        <div class="row">
                            <div class="col l-2 m-0 c-0">
                                <nav class="catalog">
                                    <h3 class="catalog__heading">Danh mục</h3>
                                    <ul class="catalog__list">
                                        <li class="catalog__item">
                                            <a href="#" class="catalog__item-link">Áo khoác</a>
                                        </li>
                                        <li class="catalog__item">
                                            <a href="#" class="catalog__item-link">Áo phông</a>
                                        </li>
                                        <li class="catalog__item">
                                            <a href="#" class="catalog__item-link">Quần đùi</a>
                                        </li>
                                        <li class="catalog__item">
                                            <a href="#" class="catalog__item-link">Quần âu</a>
                                        </li>
                                        <li class="catalog__item">
                                            <a href="#" class="catalog__item-link">Giày, dép</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col l-10 m-12 c-12">
                                <nav class="mobile-catalog">
                                    <ul class="mobile-catalog__list">
                                        <li class="mobile-catalog__item">
                                            <a href="" class="mobile-catalog__link">
                                                Áo khoác
                                            </a>
                                        </li>
                                        <li class="mobile-catalog__item">
                                            <a href="" class="mobile-catalog__link">
                                                Áo thun
                                            </a>
                                        </li>
                                        <li class="mobile-catalog__item">
                                            <a href="" class="mobile-catalog__link">
                                                Quần đùi
                                            </a>
                                        </li>
                                        <li class="mobile-catalog__item">
                                            <a href="" class="mobile-catalog__link">
                                                Quần âu
                                            </a>
                                        </li>
                                        <li class="mobile-catalog__item">
                                            <a href="" class="mobile-catalog__link">
                                                Giày, dép
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="row sm-gutter">
                                    <div class="col l-2-4 m-4 c-6">
                                        <div class="home-product-item">
                                            <a href="" class="home-product-item__link">
                                                <div class="home-product-item__img" style="background-image: url('./Assets/Img/product-1.jpg');"></div>
                                                <h4 class="home-product-item__name">Áo khoác Nam đẹp</h4>
                                                <div class="hone-product-item__price">
                                                    <span class="home-product-item__price-current">
                                                        1.000.000đ
                                                    </span>
                                                </div>
                                                <div class="home-product-item__favourite">
                                                        <i class="fas fa-check"></i>
                                                        <span>Yêu thích</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="grid wide footer__content">
                    <div class="row">
                        <div class="col l-3 m-4 c-6">
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
                        <div class="col l-3 m-4 c-6">
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
                        <div class="col l-3 m-4 c-6">
                            <h3 class="footer__heading">Danh mục</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Áo phông</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Áo khoác</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Quần đùi</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Quần âu</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="#" class="footer__list-item-link">Giày, dép</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-3 m-4 c-6">
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>