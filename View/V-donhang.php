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
                                <p class="accout__location-current"> > &nbsp;&nbsp;&nbsp; Đơn hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid wide">
                        <div class="account__heading">Kiểm tra đơn hàng</div>
                        <?php
                                if(isset($_SESSION['customer']) && $_SESSION['customer'] != NULL){
                        ?>
                            <?php if($package_user){ ?>
                                <div class="package-info wow fadeInUp" data-wow-duration=".5s">
                                    <table class="package-info__table">
                                        <thead>
                                            <tr>
                                                <th>Mã đơn hàng</th>
                                                <th>Họ và tên</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                                <th>Tổng tiền</th>
                                                <th>Trạng thái</th>
                                                <th>Ngày đặt</th>
                                                <th>Tùy chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($package_user as $key => $value){ ?>
                                            <tr>
                                                <td><?php echo $value['id'] ?></td>
                                                <td><?php echo $value['fullname'] ?></td>
                                                <td><?php echo $value['address'] ?></td>
                                                <td><?php echo $value['phone'] ?></td>
                                                <td><?php echo number_format($value['amount']); ?>đ</td>
                                                <td>
                                                    <?php if ($value['status'] == 0){ ?>
                                                        <p class="package-info__status-not-confirm">Chưa xác nhận</p>
                                                    <?php }else if ($value['status'] == 1){ ?>
                                                        <p class="package-info__status-confirmed">Đã xác nhận</p>
                                                    <?php } ?>
                                                </td>
                                                <td><?php echo $value['time_order'] ?></td>
                                                <td><a class="package-info__detail" href="?controller=chitietdonhang&id=<?php echo $value['id'] ?>">Chi tiết</a></td>
                                            </tr>   
                                            <?php } ?>         
                                        </tbody>
                                    </table>
                                </div>
                                <?php } else { ?>
                                        <h3 class="wow fadeInUp" data-wow-duration=".5s" style="font-size: 1.8rem; text-align: center; margin: 180px 0 260px 0;">Quý khách chưa đặt đơn hàng nào, nếu quý khách đã đặt hàng, thông tin đơn hàng sẽ xuất hiện ở đây</h3>
                                <?php } ?>
                        <?php }else{ ?>
                            <?php if (isset($checkcode) && count($checkcode) > 0){ ?>
                                <div class="row">
                                    <div class="col l-12 c-12 m-12 wow fadeInUp" data-wow-duration=".5s">
                                        <div class="package-info">
                                            <table class="package-info__table">
                                                <thead>
                                                    <tr>
                                                        <th>Mã đơn hàng</th>
                                                        <th>Họ và tên</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Số điện thoại</th>
                                                        <th>Trạng thái</th>
                                                        <th>Ngày đặt</th>
                                                        <th>Tùy chọn</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <td><?php echo $checkcode[0]['id'] ?></td>
                                                        <td><?php echo $checkcode[0]['fullname'] ?></td>
                                                        <td><?php echo $checkcode[0]['address'] ?></td>
                                                        <td><?php echo $checkcode[0]['phone'] ?></td>
                                                        <td>
                                                            <?php if ($checkcode[0]['status'] == 0){ ?>
                                                                <p class="package-info__status-not-confirm">Chưa xác nhận</p>
                                                            <?php }else if ($checkcode[0]['status'] == 1){ ?>
                                                                <p class="package-info__status-confirmed">Đã xác nhận</p>
                                                            <?php } ?>
                                                        </td>
                                                        <td><?php echo $checkcode[0]['time_order'] ?></td>
                                                        <td><a class="package-info__detail" href="?controller=chitietdonhang&id=<?php echo $checkcode[0]['id'] ?>">Chi tiết</a></td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php }else{ ?> 
                            <div style="margin: 100px 0 150px 0;" class="account__register">
                                <div class="row">
                                    <div class="col l-12 m-12 c-12">
                                        <div class="row">
                                            <div class="col l-6 l-o-3 m-10 m-o-1 c-12 wow fadeInUp" data-wow-duration=".5s">
                                                <form action="?controller=donhang" method="post">
                                                    <div class="check__delivery-item">
                                                        <label for="login-username" class="check__delivery-input-label wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Nhập mã đơn hàng</label>
                                                        <input type="text" name="code" placeholder="Mã đơn hàng" <?php if (isset($_POST['code'])) { ?> value="<?php echo $_POST['code']; ?>"<?php } ?>  class="check__delivery-input wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                                        <?php if(isset($error['code'])){?>
                                                            <p style=" font-size: 14px; color: red;"><?php echo $error['code'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="check__delivery-item wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".3s">
                                                        <input type="submit" class="check__delivery-submit" name="checksubmit" value="Tìm kiếm">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        <?php } ?>
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