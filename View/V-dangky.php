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
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Đăng ký</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                        <div class="account__heading">Đăng ký tài khoản</div>
                        <div class="account__register">
                            <div class="row">
                                <div class="col l-12 m-12 c-12">
                                    <form action="?controller=dangky" method="post">
                                        <div class="row">
                                            <div class="col l-6 m-12 c-12">
                                                <div class="account__register-item">
                                                    <label for="register-fullname" class="account__register-input-label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Tên đăng nhập</label>
                                                    <input type="text" name="user" class="account__register-input wow fadeInUp" <?php if (isset($_POST['user'])) { ?> value="<?php echo $_POST['user']; ?>"<?php } ?> data-wow-duration=".5s"  data-wow-delay=".2s" id="register-fullname" placeholder="Tên đăng nhập">
                                                    <?php if(isset($error['username'])){?>
                                                        <p class="wow fadeInUp" style=" font-size: 14px; color: red;" data-wow-duration=".5s"  data-wow-delay=".2s"><?php echo $error['username'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col l-6 m-12 c-12">
                                                <div class="account__register-item">
                                                    <label for="register-phone" class="account__register-input-label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Số điện thoại</label>
                                                    <input type="text" name="phone" class="account__register-input wow fadeInUp" <?php if (isset($_POST['phone'])) { ?> value="<?php echo $_POST['phone']; ?>"<?php } ?> data-wow-duration=".5s"  data-wow-delay=".2s" id="register-phone" placeholder="Số điện thoại">
                                                    <?php if(isset($error['phone'])){?>
                                                        <p class="wow fadeInUp" style=" font-size: 14px; color: red;" data-wow-duration=".5s"  data-wow-delay=".2s"><?php echo $error['phone'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col l-6 m-12 c-12">
                                                <div class="account__register-item">
                                                    <label for="register-email" class="account__register-input-label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">Email</label>
                                                    <input type="text" name="email" class="account__register-input wow fadeInUp" <?php if (isset($_POST['email'])) { ?> value="<?php echo $_POST['email']; ?>"<?php } ?> data-wow-duration=".5s"  data-wow-delay=".4s" id="register-email" placeholder="Email">
                                                    <?php if(isset($error['email'])){?>
                                                        <p class="wow fadeInUp" style=" font-size: 14px; color: red;" data-wow-duration=".5s"  data-wow-delay=".4s"><?php echo $error['email'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col l-6 m-12 c-12">
                                                <div class="account__register-item">
                                                    <label for="register-password" class="account__register-input-label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">Mật khẩu</label>
                                                    <input type="password" name="pass" class="account__register-input wow fadeInUp" <?php if (isset($_POST['pass'])) { ?> value="<?php echo $_POST['pass']; ?>"<?php } ?> data-wow-duration=".5s"  data-wow-delay=".4s" id="register-password" placeholder="Mật khẩu">
                                                    <?php if(isset($error['password'])){?>
                                                        <p class="wow fadeInUp" style=" font-size: 14px; color: red;" data-wow-duration=".5s"  data-wow-delay=".4s"><?php echo $error['password'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col l-6 m-12 c-12">
                                                <input type="submit" class="account__register-submit wow fadeInUp"  data-wow-duration=".5s"  data-wow-delay=".5s" value="Đăng ký" name="dangky" id="login-username">
                                            </div>
                                        </div>
                                    </form>
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