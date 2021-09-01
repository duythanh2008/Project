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
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Đăng nhập</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                        <div class="account__heading">Đăng nhập tài khoản</div>
                        <div class="row">
                            <div class="col l-6 m-6 c-12 wow fadeInLeft" data-wow-duration=".5s">
                                <form action="?controller=dangnhap" method="post">
                                <div class="account__login">
                                    <div class="account__login-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">
                                        <label for="login-username" class="account__login-input-label">Tên đăng nhập</label>
                                        <input type="text" name="user" class="account__login-input" <?php if (isset($_POST['user'])) { ?> value="<?php echo $_POST['user']; ?>"<?php } ?> id="login-username" placeholder="Tên đăng nhập">
                                        <?php if(isset($error['username'])){?>
                                            <p class="wow fadeInUp"  data-wow-duration=".5s"  data-wow-delay=".1s" style=" font-size: 14px; color: red;"><?php echo $error['username'] ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="account__login-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                        <label for="login-password" class="account__login-input-label">Mật khẩu</label>
                                        <input type="password" name="pass" class="account__login-input" <?php if (isset($_POST['pass'])) { ?> value="<?php echo $_POST['pass']; ?>"<?php } ?> id="login-username" placeholder="Mật khẩu">
                                        <?php if(isset($error['password'])){?>
                                            <p class="wow fadeInUp"  data-wow-duration=".5s"  data-wow-delay=".2s" style=" font-size: 14px; color: red;"><?php echo $error['password'] ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="account__login-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                                        <a style="text-decoration:none;
                                                  font-size: 1.4rem;
                                                  margin-bottom: 15px;
                                                  color: var(--primary-color);
                                                    " href="?controller=quenmatkhau">Quên mật khẩu ?</a>
                                        <input type="submit" class="account__login-submit" name="dangnhap" value="Đăng nhập" id="login-username">
                                    </div>
                                    <div class="account__login-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".4s">
                                        <a class="account__login-item-link" href="?controller=dangnhapquantri">Đăng nhập với tư cách Quản trị viên</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="col l-6 m-6 c-12 wow fadeInRight" data-wow-duration=".5s">
                                <div class="account-link-register">
                                    <h3 class="account-link-register__heading wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">
                                        Chưa có tài khoản
                                    </h3>
                                    <a href="?controller=dangky" class="account-link-register__btn wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">Đăng ký ngay !</a>
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