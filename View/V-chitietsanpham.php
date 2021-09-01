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
            <?php include('./View/header.php') ?>
            <div class="content">
                <div style="margin-top: 20px" class="grid wide">
                    <div class="row">
                        <div class="col l-6 m-12 c-12 wow fadeInLeft" data-wow-duration=".5s">
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
                        <div class="col l-6 m-12 c-12 wow fadeInRight" data-wow-duration=".5s">
                            <div class="product-detail__info">
                                <div class="product-detail__info-link wow fadeInLeft" data-wow-delay=".25s" data-wow-duration=".5s">
                                    <a href="?controller=trangchu" class="product-detail__info-link-pre1">Trang chủ</a> <p style="display: inline-block; font-size: 1.6rem;"> > &nbsp;&nbsp;</p>
                                    <a href="?controller=sanpham" class="product-detail__info-link-pre2">Sản phẩm</a> <p style="display: inline-block; font-size: 1.6rem;"> > &nbsp;&nbsp; </p>
                                </div>
                                <h3 class="product-detail__info-name wow fadeInLeft" data-wow-delay=".25s" data-wow-duration=".5s">
                                    <?php echo $product[0]['name'] ?>
                                </h3>
                                <div class="product-detail__info-catalog wow fadeInRight" data-wow-delay=".25s" data-wow-duration=".5s">
                                    <h4 class="product-detail__info-catalog-heading">Danh mục: </h4>
                                    <a href="?controller=sanpham&id=<?php echo $catalog[0]['id'] ?>" class="product-detail__info-catalog-name"><?php echo $catalog[0]['name'] ?></a>
                                </div>
                                <div class="product-detail__info-status wow fadeInLeft" data-wow-delay=".25s" data-wow-duration=".5s">
                                    <h4 class="product-detail__info-status-check">Tình trạng: </h4>
                                    <?php if ($product[0]['qty'] > 0 ){ ?>
                                        <p class="product-detail__info-status-checkname">Còn hàng</p>
                                    <?php }else{?>
                                        <p style="color: red" class="product-detail__info-status-checkname">Hết hàng</p>
                                    <?php } ?>
                                </div>
                                <p class="product-detail__info-price wow fadeInRight" data-wow-delay=".25s" data-wow-duration=".5s"><?php echo number_format($product[0]['price']) ?>đ</p>
                                
                                <?php if ($product[0]['qty'] > 0 ){ ?>
                                    <div class="product-detail__info-add-to-cart wow fadeInLeft" data-wow-delay=".25s" data-wow-duration=".5s">
                                        <form action="?controller=themgiohang&id=<?php echo $product[0]['id'] ?>" method="post">
                                            <label for="qty" class="product-detail__info-qty-label">Số lượng: </label>
                                            <input type="number" id="qty" name="qty" class="product-detail__info-qty" value="1"><br>
                                            <label for="size" class="product-detail__info-qty-label">Size</label>
                                            <select name="size" class="product-detail__info-size" id="size">
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                            </select>   
                                            <br>
                                            <input type="submit" name="add" value="Thêm vào giỏ hàng" class="product-detail__info-btn">
                                        </form>
                                    </div>
                                <?php }else{ ?>
                                    <br>
                                <?php } ?>
                                <h3 class="product-detail__desc-heading wow fadeInRight"  data-wow-delay=".25s" data-wow-duration=".5s">
                                    Mô tả sản phẩm
                                </h3>
                                <h3 class="product-detail__desc wow fadeInLeft" data-wow-delay=".25s" data-wow-duration=".5s">
                                    <?php echo $product[0]['description'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 50px" class="grid wide">
                    <div class="row">
                        <div class="col l-9 m-12 c-12 wow fadeInLeft" data-wow-duration=".5s">
                            
                            <h3 class="product-detail__rating-heading">
                                Đánh giá
                            </h3>
                            <div class="product-detail__rating wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                                <?php if ($product[0]['total_rate'] && $product[0]['rate_times'] != ''){ ?>
                                    <h3 style="font-size: 1.6rem; text-align: center;">Đánh giá trung bình</h3>
                                    <div class="product-detail_show-rating">
                                        <div class="product-detail_show-rating-result">
                                            <div class="rateResult" data-rateyo-rating="<?php echo number_format($product[0]['total_rate'] / $product[0]['rate_times'],1) ?>"></div>
                                            <h3 class="product-detail__rating-record"><?php echo number_format($product[0]['total_rate'] / $product[0]['rate_times'],1) ?> / 5 sao</h3>
                                        </div>
                                    </div>
                                    <ul class="product-detail__rating-list">
                                        <?php foreach ($rating as $key => $value){?>
                                        <li class="product-detail__rating-list-item">
                                            <div class="product-detal__rating-info">
                                                <i class="fas fa-user product-detail__rating-user-icon"></i>
                                                <h3 class="product-detail__rating-user-name"><?php echo $value['fullname'] ?></h3>
                                            </div>
                                            <div class="product-detail__rating-user-rating">
                                                <div class="rateResult" data-rateyo-rating="<?php echo $value['rate'] ?>"></div>
                                                <h3 class="product-detail__rating-user-rating-content"><?php echo $value['content'] ?></h3>
                                                <h3 class="product-detail__rating-user-rating-time"><?php echo $value['time_rate'] ?></h3>
                                            </div>
                                        </li>
                                        <?php }?>
                                    </ul><br><br>
                                <?php }else{ ?>
                                    <h3 style="font-size: 1.6rem; text-align: center;">Chưa có đánh giá</h3>
                                    <div style="justify-content: center;" class="product-detail_show-rating-result"> 
                                        <div class="rateResult" data-rateyo-rating="0"></div>
                                    </div><br><br>
                                <?php } ?>
                                <h3 style="font-size: 1.6rem; text-align: center;">Gửi đánh giá của ban</h3>
                                <form action="?controller=danhgiasanpham&id=<?php echo $product[0]['id'] ?>" method="post">
                                    <div class="product-detail__rating-item">
                                        <label for="fullname" class="product-detail__rating-label">Họ và tên</label>
                                        <input type="text" name="fullname" id="fullname" value="<?php if (isset($_SESSION['customer'])){ echo $user[0]['fullname']; }?>" placeholder="Họ và tên" class="product-detail__rating-input" required>
                                    </div>
                                    <div class="product-detail__rating-item">
                                        <label for="email" class="product-detail__rating-label">Email</label>
                                        <input type="email" name="email" id="email" value="<?php if (isset($_SESSION['customer'])){ echo $user[0]['email']; }?>" placeholder="Email" class="product-detail__rating-input" required>
                                    </div>
                                    <div class="product-detail__rating-item">
                                        <label for="content" class="product-detail__rating-label">Nội dung</label>
                                        <textarea type="email" name="content" id="content" placeholder="Nội dung" class="product-detail__rating-textarea"></textarea>
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
                                    <input type="submit" name="submit" value="Gửi đánh giá" class="product-detail__rating-submit">
                                </form>
                            </div>
                        </div>
                        <div class="col l-3 m-12 c-12 wow fadeInRight" data-wow-duration=".5s">
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
        
        $(function () {
            $(".rateResult").rateYo({
                readOnly: true
            });
            });
            });
    </script>
</body>
</html>