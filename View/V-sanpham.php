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
            <?php include('./View/header.php'); ?>
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
                            <div class="col l-2 m-0 c-0 wow fadeInLeft" data-wow-duration=".55s">
                                <nav class="catalog">
                                    <h3 class="catalog__heading">Bộ lọc</h3>
                                    <form action="?controller=sanpham" method="post">
                                    <p style="font-size: 17px; font-weight: 600; color: var(--text-color); margin-left: 20px;">Danh mục</p>
                                        <ul class="catalog__list">
                                            <?php foreach ($catalog as $key => $value){ ?>
                                                <li class="catalog__item">
                                                    <input class="find" type="checkbox" class="find" name="catalog[]" value="<?php echo $value['id'] ?>" 
                                                    <?php if(isset($catalog_list)){
                                                        foreach ($catalog_list as $key => $item){
                                                            if($item == $value['id']){
                                                                echo "checked";
                                                            }
                                                        }
                                                    } ?>
                                                    <?php if(isset($catalog_id)){
                                                            if($catalog_id == $value['id']){
                                                                echo "checked";
                                                            }
                                                        }    
                                                    ?> > &nbsp;<?php echo $value['name'] ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <p style="font-size: 17px; font-weight: 600; color: var(--text-color); margin-left: 20px;">Giá</p>
                                    <ul class="catalog__list">
                                        <li class="catalog__item">
                                            <input class="find" type="radio" value="1" <?php if (isset($_POST['price']) && $_POST['price']==1): ?>checked='checked'<?php endif; ?> name="price">&nbsp;Dưới 200k
                                        </li>
                                        <li class="catalog__item">
                                            <input class="find" type="radio" value="2" <?php if (isset($_POST['price']) && $_POST['price']==2): ?>checked='checked'<?php endif; ?> name="price">&nbsp;200k-400k
                                        </li>
                                        <li class="catalog__item">
                                            <input class="find" type="radio" value="3" <?php if (isset($_POST['price']) && $_POST['price']==3): ?>checked='checked'<?php endif; ?> name="price">&nbsp;400k-600k
                                        </li>
                                        <li class="catalog__item">
                                            <input class="find" type="radio" value="4" <?php if (isset($_POST['price']) && $_POST['price']==4): ?>checked='checked'<?php endif; ?> name="price">&nbsp;600k-800k
                                        </li>
                                        <li class="catalog__item">
                                            <input class="find" type="radio" value="5" <?php if (isset($_POST['price']) && $_POST['price']==5): ?>checked='checked'<?php endif; ?> name="price">&nbsp;Trên 800k<br>
                                        </li>
                                    </ul>
                                    <input type="submit" class="catalog_search-btn" name="search" value="Lọc">
                                    <a style="text-decoration: none; font-size: 1.3rem; color: var(--text-color);" href="?controller=sanpham">Xóa</a>
                                    </form>
                                </nav>
                            </div>
                            <div class="col l-10 m-12 c-12 wow fadeInRight" data-wow-duration=".5s">
                                <div class="row sm-gutter">
                                    <div style="background-color: #f5f5f5" class="col l-0 m-12 c-12">
                                        <h3 class="catalog__heading">Bộ lọc</h3>
                                        <form action="?controller=sanpham" method="post">
                                        <p style="font-size: 17px; font-weight: 600; color: var(--text-color); margin-left: 20px;">Danh mục</p>
                                        <ul class="catalog__list">
                                            <?php foreach ($catalog as $key => $value){ ?>
                                                <li class="catalog__item">
                                                    <input class="find" type="checkbox" class="find" name="catalog[]" value="<?php echo $value['id'] ?>" 
                                                    <?php if(isset($catalog_list)){
                                                        foreach ($catalog_list as $key => $item){
                                                            if($item == $value['id']){
                                                                echo "checked";
                                                            }
                                                        }
                                                    } ?>
                                                    <?php if(isset($catalog_id)){
                                                            if($catalog_id == $value['id']){
                                                                echo "checked";
                                                            }
                                                        }    
                                                    ?> > &nbsp;<?php echo $value['name'] ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <p style="font-size: 17px; font-weight: 600; color: var(--text-color); margin-left: 20px;">Giá</p>
                                        <ul class="catalog__list">
                                            <li class="catalog__item">
                                                <input class="find" type="radio" value="1" <?php if (isset($_POST['price']) && $_POST['price']==1): ?>checked='checked'<?php endif; ?> name="price">&nbsp;Dưới 200k
                                            </li>
                                            <li class="catalog__item">
                                                <input class="find" type="radio" value="2" <?php if (isset($_POST['price']) && $_POST['price']==2): ?>checked='checked'<?php endif; ?> name="price">&nbsp;200k-400k
                                            </li>
                                            <li class="catalog__item">
                                                <input class="find" type="radio" value="3" <?php if (isset($_POST['price']) && $_POST['price']==3): ?>checked='checked'<?php endif; ?> name="price">&nbsp;400k-600k
                                            </li>
                                            <li class="catalog__item">
                                                <input class="find" type="radio" value="4" <?php if (isset($_POST['price']) && $_POST['price']==4): ?>checked='checked'<?php endif; ?> name="price">&nbsp;600k-800k
                                            </li>
                                            <li class="catalog__item">
                                                <input class="find" type="radio" value="5" <?php if (isset($_POST['price']) && $_POST['price']==5): ?>checked='checked'<?php endif; ?> name="price">&nbsp;Trên 800k<br>
                                            </li>
                                        </ul>
                                        <input type="submit" class="catalog_search-btn" name="search" value="Lọc">
                                        <a style="text-decoration: none; font-size: 1.2rem;" href="?controller=sanpham">Xóa</a>
                                        </form>
                                    </div>
                                    <?php
                                        $num=0;
                                    foreach ($product as $key => $value){
                                        $num++
                                    ?>
                                    <div class="col l-2-4 m-4 c-6">
                                        <div class="home-product-item">
                                            <a href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>" class="home-product-item__link">
                                                <div class="home-product-item__img" style="background-image: url('<?php echo $value['image'] ?>');"></div>
                                                <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                                <div class="hone-product-item__price">
                                                    <span class="home-product-item__price-current">
                                                        <?php echo number_format($value['price']); ?>đ
                                                    </span>
                                                </div>
                                            </a>
                                            <a class="home-product-item__add-to-cart" href="?controller=themgiohang&id=<?php echo $value['id']?>">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if ($num == 0){ ?>
                                    <p style="margin: 20px auto 0; font-size: 1.6rem;"><?php echo "Không có sản phẩm phù hợp"; }?></p>
                                </div>
                                <div class="page-btn wow fadeInUp" data-wow-duration=".5s">
                                    <?php
                                    if ($current_page > 3) {
                                        $first_page = 1;
                                        ?>
                                        <a class="page-item" href="?controller=sanpham&per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">Đầu</a>
                                        <?php
                                    }
                                    if ($current_page > 1) {
                                        $prev_page = $current_page - 1;
                                        ?>
                                        <a class="page-item" href="?controller=sanpham&per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Trước</a>
                                    <?php }
                                    ?>
                                    <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                        <?php if ($num != $current_page) { ?>
                                            <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                                <a class="page-item" href="?controller=sanpham&per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <strong class="current-page page-item"><?= $num ?></strong>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php
                                    if ($current_page < $totalPages - 1) {
                                        $next_page = $current_page + 1;
                                        ?>
                                        <a class="page-item" href="?controller=sanpham&per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Sau</a>
                                    <?php
                                    }
                                    if ($current_page < $totalPages - 3) {
                                        $end_page = $totalPages;
                                        ?>
                                        <a class="page-item" href="?controller=sanpham&per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Cuối</a>
                                        <?php
                                    }
                                    ?>
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