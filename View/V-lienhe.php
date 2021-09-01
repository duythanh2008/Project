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
                <div class="contact">
                    <div class="grid">
                        <div class="account__location">
                            <div>
                                <a class="accout__location-home" href="?controller=trangchu">Trang chủ</a>
                            </div>
                            <div>
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Liên hệ</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                        <?php if(isset($notice['message'])){?>
                            <p style="font-size: 1.9rem; color: #33CC1F; text-align: center;"><?php echo $notice['message'] ?></p>
                        <?php } ?>
                        <div class="row">
                            <div class="col l-6 m-12 c-12 wow fadeInLeft" data-wow-duration=".5s">
                                <div class="contact-form">
                                    <h3 class="contact-form__heading wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Liên hệ với chúng tôi</h3>
                                    <form action="?controller=lienhe" method="post">
                                        <div class="contact-form__item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                            <input type="text" name="fullname" class="contact-form__item-input" placeholder="Họ và tên">
                                            <?php if(isset($error['fullname'])){?>
                                                <p style=" font-size: 14px; color: red;"><?php echo $error['fullname'] ?></p>
                                            <?php } ?>
                                        </div>
                                        <div class="contact-form__item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                                            <input type="email" name="email" class="contact-form__item-input" placeholder="Email">
                                            <?php if(isset($error['email'])){?>
                                                <p style=" font-size: 14px; color: red;"><?php echo $error['email'] ?></p>
                                            <?php } ?>
                                        </div>
                                        <div class="contact-form__item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".4s">
                                            <textarea name="content" id="" cols="30" rows="10" class="contact-form__item-textarea" placeholder="Nội dung"></textarea>
                                            <?php if(isset($error['content'])){?>
                                                <p style=" font-size: 14px; color: red;"><?php echo $error['content'] ?></p>
                                            <?php } ?>
                                        </div>
                                        <input type="submit" name="contact" value="Gửi liên hệ" class="contact-form__item-submit wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".5s">
                                    </form>
                                </div>
                            </div>
                            <div class="col l-6 m-12 c-12 wow fadeInRight" data-wow-duration=".5s">
                                <div class="contact-info">
                                    <h3 class="contact-info__address wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Địa chỉ: Số 1, Hoàng Đạo Thúy, Phường Nhân Chính, Quận Thanh Xuân, Hà Nội</h3>
                                    <h3 class="contact-info__phone wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Hotline: <a href="tel: 0987654321" class="contact-info__phone-link">0987654321</a> </h3>
                                    <h3 class="contact-info__mail wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Mail: contact@fashiongenz.com</h3>
                                    <iframe class="contact-info__map wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6768648167285!2d105.80168511531349!3d21.005586293944056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca1f608e5d5%3A0x1a8159d717fd1eff!2zMSBIb8OgbmcgxJDhuqFvIFRow7p5LCBOaMOibiBDaMOtbmgsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWkgMTIwNjM4LCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1627629310954!5m2!1svi!2s" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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