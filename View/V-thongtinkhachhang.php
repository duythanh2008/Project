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
                <div class="account">
                    <div class="grid">
                        <div class="account__location">
                            <div>
                                <a class="accout__location-home" href="?controller=trangchu">Trang chủ</a>
                            </div>
                            <div>
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Hồ sơ khách hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                        <div class="account__heading">Hồ sơ khách hàng </div>
                        <div class="account__info">
                            <div class="row sm-gutter">
                                <div class="col l-2 m-12 c-12 wow fadeInLeft" data-wow-duration=".5s">
                                    <div class="account__section">
                                        <ul class="account-info__list">
                                            <li class="account-info__item">
                                                <a style="font-weight: 500; color: var(--primary-color);" href="?controller=thongtinkhachhang" class="account-info__link">Thông tin tài khoản</a>
                                            </li>
                                            <li class="account-info__item">
                                                <a href="?controller=doimatkhaukhachhang" class="account-info__link">Đổi mật khẩu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col l-10 m-12 c-12 wow fadeInRight" data-wow-duration=".5s">
                                    <div class="account-info__detail">
                                        <h3 class="account-info__heading">Thông tin tài khoản</h3>
                                        <?php foreach ($user as $key => $value){?>
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col l-6 m-12 c-12">
                                                    <div class="account-info__form">
                                                        <label for="fullname" class="account-info__label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Họ và tên</label>
                                                        <input type="text" name="fullname" id="fullname" value="<?php echo $value['fullname']; ?>" class="account-info__input wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s" placeholder="Họ và tên" class="account-info__input">
                                                    </div>
                                                    <div class="account-info__form">
                                                        <label for="phone" class="account-info__label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">Số điện thoại</label>
                                                        <input type="text" name="phone" id="phone" value="<?php echo $value['phone']; ?>" placeholder="Số điện thoại" class="account-info__input wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".4s" required>
                                                    </div>
                                                </div>
                                                <div class="col l-6 m-12 c-12">
                                                    <div class="account-info__form">
                                                        <label for="address" class="account-info__label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Địa chỉ</label>
                                                        <input type="text" name="address" id="address" value="<?php echo $value['address']; ?>" placeholder="Địa chỉ" class="account-info__input wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                                    </div>
                                                    <div class="account-info__form">
                                                        <label for="email" class="account-info__label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">Email</label>
                                                        <input type="email" name="email" id="email" value="<?php echo $value['email']; ?>" placeholder="Email" class="account-info__input wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".4s" required readonly>
                                                    </div>
                                                </div>
                                                <input type="submit" class="account-info__submit wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".5s" name="edit" value="Thay đổi">
                                            </div>
                                        </form>
                                        <?php } ?>
                                    </div>
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