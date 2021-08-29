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
    <style>
        <?php if ($admin[0]['lv'] == 2){ ?>
        #menu1{
            display: none;
        }
        <?php } ?>
    </style>
</head>
<body>
    <div class="grid">
        <div class="row no-gutters">
            <div class="col l-2 m-0 c-0">
                <div class="admin-menu">
                    <ul class="admin-menu__list">
                        <li class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link admin-menu__item-link-has-img">
                                <img src="./Assets/Img/logo.png" alt="" class="admin-menu__item-link-img">
                            </a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=trangquantri" class="admin-menu__item-link">Tổng quan</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link">Quản lý website</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="?controller=quanlynhanvien" class="admin-menu__item-link active">Quản lý nhân viên</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="?controller=quanlynguoidung" class="admin-menu__item-link">Quản lý người dùng</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlysanpham" class="admin-menu__item-link">Quản lý sản phẩm</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlydonhang" class="admin-menu__item-link">Quản lý đơn hàng</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlydanhgia" class="admin-menu__item-link">Quản lý đánh giá</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col l-10 m-12 c-12">
                <div class="admin-header">
                        <div class="admin-header__sections">
                            <label for="nav__mobile-input-admin" class="admin-menu-icon"><i class="fas fa-bars"></i></label>
                            <a href="?controller=trangchu" class="admin-header__back-to-website"><i class="fas fa-backward"></i> Trở về website</a>
                        </div>
                        <div class="admin-header__admin-info">
                            <h3 class="admin-header__admin-name"><?php echo $admin[0]['fullname'] ?></h3>
                            <a href="?controller=dangxuatquantri" class="admin-header__admin-logout">Thoát</a>
                        </div>
                        <input type="checkbox" hidden class="nav__mobile-input-admin" id="nav__mobile-input-admin">
                        <label for="nav__mobile-input-admin" class="header__navbar-mobile-overlay-admin"></label>
                        <div class="admin-menu__mobile">
                            <label for="nav__mobile-input-admin" class="header__navbar-mobile-close-admin">                    
                                <i class="fas fa-times"></i>
                            </label>
                            <ul class="admin-menu__list">
                                <li class="admin-menu__item">
                                    <a href="?controller=trangquantri" class="admin-menu__item-link admin-menu__item-link-has-img">
                                        <img src="./Assets/Img/logo.png" alt="" class="admin-menu__item-link-img">
                                    </a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=trangquantri" class="admin-menu__item-link">Tổng quan</a>
                                </li>
                                <li id="menu1" class="admin-menu__item">
                                    <a href="#" class="admin-menu__item-link">Quản lý website</a>
                                </li>
                                <li id="menu1" class="admin-menu__item">
                                    <a href="?controller=quanlynhanvien" class="admin-menu__item-link active">Quản lý nhân viên</a>
                                </li>
                                <li id="menu1" class="admin-menu__item">
                                    <a href="?controller=quanlynguoidung" class="admin-menu__item-link">Quản lý người dùng</a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=quanlysanpham" class="admin-menu__item-link">Quản lý sản phẩm</a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=quanlydonhang" class="admin-menu__item-link">Quản lý đơn hàng</a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=quanlydanhgia" class="admin-menu__item-link">Quản lý đánh giá</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="admin-content">
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <h3 class="admin-content__heading wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Thêm nhân viên</h3><br>
                        </div>
                        <div class="col l-6 l-o-3 m-12 c-12">
                            <form action="?controller=themnhanvien" method="post" name="addform">
                                <div class="admin__add-product">
                                    <div class="admin__add-product-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                        <label for="fullname" class="admin__add-product-label">Họ và tên</label>
                                        <input type="text" name="fullname" id="fullname" <?php if (isset($_POST['fullname'])) { ?> value="<?php echo $_POST['fullname']; ?>"<?php } ?> placeholder="Họ và tên" class="admin__add-product-input">
                                        <?php if (isset($error['fullname'])){?> 
                                            <p class="error"><?php echo $error['fullname']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                        <label for="username" class="admin__add-product-label">Tên đăng nhập</label>
                                        <input type="text" name="username" id="username" <?php if (isset($_POST['username'])) { ?> value="<?php echo $_POST['username']; ?>"<?php } ?> placeholder="Tên đăng nhập" class="admin__add-product-input">
                                        <?php if (isset($error['username'])){?> 
                                            <p class="error"><?php echo $error['username']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                                        <label for="password" class="admin__add-product-label">Mật khẩu</label>
                                        <input type="password" name="password" id="password" <?php if (isset($_POST['password'])) { ?> value="<?php echo $_POST['password']; ?>"<?php } ?> placeholder="Mật khẩu" class="admin__add-product-input">
                                        <?php if (isset($error['password'])){?> 
                                            <p class="error"><?php echo $error['password']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                                        <label for="date" class="admin__add-product-label">Ngày sinh</label>
                                        <input type="text" name="date" id="date" <?php if (isset($_POST['date'])) { ?> value="<?php echo $_POST['date']; ?>"<?php } ?> placeholder="Ngày sinh" class="admin__add-product-input">
                                        <?php if (isset($error['date'])){?> 
                                            <p class="error"><?php echo $error['date']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".4s">
                                        <label for="gender" class="admin__add-product-label">Giới tính</label>
                                        <select name="gender" id="gender"  class="admin__add-product-select">
                                            <?php foreach ($gender_all as $key => $value){ ?>
                                                <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="admin__add-product-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".4s">
                                        <label for="position" class="admin__add-product-label">Chức vụ</label>
                                        <select name="position" id="position" class="admin__add-product-select">
                                            <?php foreach ($position_all as $key => $value){ ?>
                                                <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="submit" value="Thêm nhân viên" name="add-admin" class="admin__add-product-btn wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".5s">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>