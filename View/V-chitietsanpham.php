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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
                                <img src="<?php echo $product[0]['image'] ?>" class="product-detail__img-link" id="productImg">
                                <div class="small-img-row">
                                    <div class="small-img-col">
                                        <img src="<?php echo $product[0]['image'] ?>" width="100%" class="small-img">
                                    </div>
                                    <div class="small-img-col">
                                        <img src="<?php echo $product[0]['image2'] ?>" width="100%" class="small-img">
                                    </div>
                                    <div class="small-img-col">
                                        <img src="<?php echo $product[0]['image3'] ?>" width="100%" class="small-img">
                                    </div>
                                    <div class="small-img-col">
                                        <img src="<?php echo $product[0]['image4'] ?>" width="100%" class="small-img">
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
                                    <?php echo $product[0]['name'] ?>
                                </h3>
                                <div class="product-detail__info-catalog">
                                    <h4 class="product-detail__info-catalog-heading">Danh mục: </h4>
                                    <a href="#" class="product-detail__info-catalog-name"><?php echo $catalog[0]['name'] ?></a>
                                </div>
                                <div class="product-detail__info-status">
                                    <h4 class="product-detail__info-status-check">Tình trạng: </h4>
                                    <?php if ($product[0]['qty'] >0 ){ ?>
                                        <p class="product-detail__info-status-checkname">Còn hàng</p>
                                    <?php }else{?>
                                        <p style="color: red" class="product-detail__info-status-checkname">Hết hàng</p>
                                    <?php } ?>
                                </div>
                                <p class="product-detail__info-price"><?php echo number_format($product[0]['price']) ?>đ</p>
                                
                                <div class="product-detail__info-add-to-cart">
                                    <form action="?controller=themgiohang&id=<?php echo $product[0]['id'] ?>" method="post">
                                        <label for="qty" class="product-detail__info-qty-label">Số lượng: </label>
                                        <input type="number" id="qty" name="qty" class="product-detail__info-qty" value="1">
                                        <br>
                                        <input type="submit" name="add" value="Thêm vào giỏ hàng" class="product-detail__info-btn">
                                    </form>
                                </div>
                                <h3 class="product-detail__desc-heading">
                                    Mô tả sản phẩm
                                </h3>
                                <h3 class="product-detail__desc">
                                    <?php echo $product[0]['description'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px" class="grid wide">
                    <div class="row">
                        <div class="col l-9 m-12 c-12">
                            
                            <h3 class="product-detail__rating-heading">
                                Đánh giá
                            </h3>
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
                                        <textarea type="email" name="" id="content" placeholder="Nội dung" class="product-detail__rating-textarea"></textarea>
                                    </div>
                                    <div class="product-detail__rating-item">
                                        <div class="rateyo" id="rating"
                                        data-rateyo-rating="0"
                                        data-rateyo-num-stars="5"
                                        data-rateyo-score="3">
                                        </div>

                                        <span style="font-size: 1.4rem; margin-top: 6px" class='result'></span>
                                        <input type="hidden" name="rating">
                                    </div>
                                    <input type="submit" value="Gửi đánh giá" class="product-detail__rating-submit">
                                </form>
                            </div>
                        </div>
                        <div class="col l-3 m-12 c-12">
                            <div class="product-relative">
                                <h3 class="product-relative__heading">Sản phẩm liên quan</h3>
                                <ul class="product-relative__list">
                                    <?php foreach ($product_relative as $key => $value){?>
                                        <li class="product-relative__item">
                                        <a href="?controller=chitietsanpham&id=<?php echo $value['id']; ?>" class="product-relative__item-link">
                                            <img src="<?php echo $value['image']; ?>" alt="" class="product-relative__item-img">
                                            <div class="product-relative__item-info">
                                                <h3 class="product-relative__item-name">
                                                    <?php echo $value['name']; ?>
                                                </h3>
                                                <h3 class="product-relative__item-price">
                                                    <?php echo number_format($value['price']); ?>đ
                                                </h3>
                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
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
                                                <script type="text/javascript" src="./Assets/JS/product.js"></script>
    <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('Đánh giá: '+ rating + ' sao');
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
    </script>
</body>
</html>