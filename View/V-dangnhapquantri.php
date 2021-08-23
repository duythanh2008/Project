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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/Fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Fashion GenZ</title>
</head>
<body style="background-color: var(--primary-color);">
    <div class="grid wide">
        <div class="row">
            <div class="col l-6 l-o-3 m-10 m-o-1 c-12">
                <div class="login-form wow fadeInDown" data-wow-duration=".5s">
                    <form action="?controller=dangnhapquantri" method="post">
                        <div class="login-form__item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">
                            <img src="./Assets/Img/logo.png" class="login-form__item-img">
                        </div>
                        <div class="login-form__item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                            <label for="user" class="login-form__item-label">Tên đăng nhập</label>
                            <input type="text" name="user" placeholder="Tên đăng nhập" id="user" class="login-form__item-input">
                            <?php if(isset($error['username'])){?>
                                <p style=" font-size: 14px; color: red;"><?php echo $error['username'] ?></p>
                            <?php } ?>
                        </div>
                        <div class="login-form__item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                            <label for="pass" class="login-form__item-label">Mật khẩu</label>
                            <input type="password" name="pass" placeholder="Tên đăng nhập" id="pass" class="login-form__item-input">
                            <?php if(isset($error['password'])){?>
                                <p style=" font-size: 14px; color: red;"><?php echo $error['password'] ?></p>
                            <?php } ?>
                        </div>
                        <div class="login-form__item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".4s">
                            <input type="submit" name="dangnhap" class="login-form__item-submit" value="Đăng nhập">
                            <a style="text-decoration: none; font-size: 1.4rem; text-align: center; margin-bottom: 5px; color: var(--text-color);" href="?controller=trangchu">Trở về trang chủ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>