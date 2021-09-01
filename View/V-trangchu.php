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
                            <?php if (count($product) > 0){ ?>
                            <h3 class="home-product__heading-search wow fadeInDown" data-wow-duration="1s">
                                Kết quả tìm kiếm của "<?php echo $_GET['keyword'] ?>"
                            </h3>
                            <?php } else { ?>
                            <h3 class="home-product__heading-search wow fadeInDown" data-wow-duration="1s">
                                Không có sản phẩm trùng với từ khóa "<?php echo $_GET['keyword'] ?>"
                            </h3>
                            <?php } ?>
                            <div class="row sm-gutter wow fadeInLeft" data-wow-duration="1s">
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
                        <?php }?>
                        <h3 class="home-product__heading  wow fadeInLeft">
                            Sản phẩm nổi bật
                        </h3>
                        <div class="row sm-gutter">
                            <?php foreach ($product1 as $key => $value){ ?>
                            <div class="col l-2-4 m-4 c-6 wow fadeInUp">
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
                                    <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php foreach ($product2 as $key => $value){ ?>
                            <div class="col l-2-4 m-4 c-6 wow fadeInUp">
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
                                    <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <?php } ?>
                            <?php foreach ($product3 as $key => $value){ ?>
                            <div class="col l-2-4 m-4 c-6 wow fadeInUp">
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
                                    <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="grid wide">
                    <div class="banner__img wow bounceInRight">
                        <img style="padding-top: 10px" src="./Assets/Img/banner3.png" alt="" class="banner__img-link">
                    </div>
                    <h3 class="home-product__new wow fadeInRight">
                        Sản phẩm mới
                    </h3>
                    <div class="row sm-gutter wow fadeInUp">
                        <?php foreach ($product_new as $key => $value){?>
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
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">MỚI</span>
                                            <span class="home-product-item__sale-off-label">VỀ</span>
                                        </div>
                                    </a>
                                    <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Tab items -->
                <div class="grid wide">
                    <div class="banner__img wow bounceInLeft">
                        <img style="filter: brightness(180%); margin-top: 25px" src="./Assets/Img/banner2.jpg" alt="" class="banner__img-link">
                    </div>
                    
                    <h3 class="home-catalog__heading wow fadeInDown" data-wow-duration="1s">
                            Danh mục sản phẩm
                    </h3>
                    <div class="tab wow fadeInRight" data-wow-duration="1s">
                        <button class="tablinks active" onclick="catalog(event, 'Aokhoac')">Áo khoác</button>
                        <button class="tablinks" onclick="catalog(event, 'Aophong')">Áo phông</button>
                        <button class="tablinks" onclick="catalog(event, 'Quandai')">Quần dài</button>
                        <button class="tablinks" onclick="catalog(event, 'Quanshort')">Quần short</button>
                        <button class="tablinks" onclick="catalog(event, 'Giaydep')">Giày, dép</button>
                    </div>

                    <div class="wow fadeInLeft">
                        <div id="Aokhoac" class="tabcontent active">
                            <div class="row sm-gutter">
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
                                        <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="Aophong" class="tabcontent">
                            <div class="row sm-gutter">
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
                                            <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="Quandai" class="tabcontent">
                            <div class="row sm-gutter">
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
                                            <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="Quanshort" class="tabcontent">
                            <div class="row sm-gutter">
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
                                            <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="Giaydep" class="tabcontent">
                            <div class="row sm-gutter">
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
                                            <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="web-ads wow fadeInUp">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-3 m-6 c-6">
                            <div class="web-ads_item">
                                <i class="fas fa-phone-alt web-ads_item-icon"></i>
                                <div class="web-ads_item-info">
                                    <h3 class="web-ads_item-info-heading">Hotline hỗ trợ</h3>
                                    <p class="web-ads_item-info-content">0987654321</p>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="web-ads_item">
                                <i class="fas fa-truck web-ads_item-icon"></i>
                                <div class="web-ads_item-info">
                                    <h3 class="web-ads_item-info-heading">Miễn phí vận chuyển</h3>
                                    <p class="web-ads_item-info-content">Trên toàn quốc</p>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="web-ads_item">
                                <i class="fas fa-undo-alt web-ads_item-icon"></i>
                                <div class="web-ads_item-info">
                                    <h3 class="web-ads_item-info-heading">Miễn phí đổi trả</h3>
                                    <p class="web-ads_item-info-content">Trong vòng 7 ngày</p>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="web-ads_item">
                                <i class="fas fa-hand-holding-usd web-ads_item-icon"></i>
                                <div class="web-ads_item-info">
                                    <h3 class="web-ads_item-info-heading">Ship COD</h3>
                                    <p class="web-ads_item-info-content">Thanh toán khi nhận hàng</p>
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
        <script type="text/javascript" src="./Assets/JS/tabs.js"></script>
        <script type="text/javascript" src="./Assets/JS/slide.js"></script>
        <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>