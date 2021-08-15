<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Assets/Img/logo.png">
    <link rel="stylesheet" href="./Assets/Css/grid.css">
    <link rel="stylesheet" href="./Assets/Css/responsive.css">
    <link rel="stylesheet" href="./Assets/Css/base.css">
    <link rel="stylesheet" href="./Assets/Css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/Fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tháng', 'Doanh thu'],
           <?php foreach ($profit_all as $key => $value){ ?>
              ['<?php echo $value['month'] ?>',<?php echo $value['profit'] ?>],
           <?php } ?>
        ]);

        var options = {
            legend: {
                alignment: 'center',
                textStyle: {
                    fontSize: 16,
                },
            },
            chart: {
                title: 'Doanh thu của cửa hàng',
                subtitle: 'Năm 2021'
            },
            titleTextStyle: {
                color: '#000',
                fontSize: 18,
            },
            colors: ['#12ca12'],
            hAxis: {
                title: 'Tháng',
                titleTextStyle: {
                    fontSize: 15,
                }
            },
            vAxis: {
                title: 'Số tiền',
                titleTextStyle: {
                    fontSize: 15,
                }
            },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Tháng', 'Số đơn hàng', 'Sản phẩm bán ra'],
          <?php foreach ($profit_all as $key => $value){ ?>
              ['<?php echo $value['month'] ?>',<?php echo $value['all_order'] ?>,<?php echo $value['sold_product'] ?>],
           <?php } ?>
        ]);

        var options = {
            legend: {
                alignment: 'center',
                textStyle: {
                    fontSize: 16,
                }
            },
            chart: {
                title: 'Số đơn hàng và sản phẩm bán ra của cửa hàng',
                subtitle: 'Năm 2021',
            },
            titleTextStyle: {
                color: '#000',
                fontSize: 18,
            },
            colors: ['#2929ff','#ffe600'],
            hAxis: {
                title: 'Tháng',
                titleTextStyle: {
                    fontSize: 15,
                }
            },
            vAxis: {
                title: 'Số lượng',
                titleTextStyle: {
                    fontSize: 15,
                }
            },
            bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material1'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
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
                            <a href="?controller=trangquantri" class="admin-menu__item-link active">Tổng quan</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link">Quản lý website</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="?controller=quanlynhanvien" class="admin-menu__item-link">Quản lý nhân viên</a>
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
                                <a href="?controller=trangquantri" class="admin-menu__item-link active">Tổng quan</a>
                            </li>
                            <li id="menu1" class="admin-menu__item">
                                <a href="#" class="admin-menu__item-link">Quản lý website</a>
                            </li>
                            <li id="menu1" class="admin-menu__item">
                                <a href="?controller=quanlynhanvien" class="admin-menu__item-link">Quản lý nhân viên</a>
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
                <?php if ($admin[0]['lv'] == 1){ ?>
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <h3 class="admin-content__heading">Thống kê</h3><br>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="admin-content__profit">
                                <i class="fas fa-money-bill-wave-alt admin-content__profit-img"></i>
                                <div class="admin-content__profit-content">
                                    <h3 class="admin-content__profit-heading">Doanh thu cửa hàng tháng này</h3>
                                    <h4 class="admin-content__profit-info"><?php echo number_format($profit_data[0]['profit']) ?>đ</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="admin-content__all-item">
                            <i class="fas fa-box admin-content__all-item-img"></i>
                                <div class="admin-content__all-item-content">
                                    <h3 class="admin-content__all-item-heading">Tổng đơn hàng tháng này</h3>
                                    <h4 class="admin-content__all-item-info"><?php echo $profit_data[0]['all_order'] ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="admin-content__item-sold">
                            <i class="fas fa-coins admin-content__item-sold-img"></i>
                                <div class="admin-content__item-sold-content">
                                    <h3 class="admin-content__item-sold-heading">Sản phẩm đã bán tháng này</h3>
                                    <h4 class="admin-content__item-sold-info"><?php echo $profit_data[0]['sold_product'] ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="admin-content__item-not-confirm">
                            <i class="fas fa-hand-paper admin-content__item-not-confirm-img"></i>
                                <div class="admin-content__item-not-confirm-content">
                                    <h3 class="admin-content__item-not-confirm-heading">Đơn hàng chưa xác nhận</h3>
                                    <h4 class="admin-content__item-not-confirm-info"><?php echo $profit_data[0]['order_not_confirm'] ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-12 m-12 c-12">
                            <h3 style="
                                        font-size: 2rem;
                                        padding: 20px 0 0 20px;
                                        ">Doanh thu cửa hàng so với tháng trước: <?php echo number_format($profit_current_month[0]['profit'] / $profit_previous_month[0]['profit']*100,1)."%"?></h3>
                            <div id="barchart_material" style="width: 100%; height: 500px;padding: 20px"></div>
                            <div id="barchart_material1" style="width: 100%; height: 500px;padding: 20px"></div>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <h3 class="admin-notice">Tài khoản quản trị viên mới có thể xem thông tin này !</h3>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>