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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
                            <a href="?controller=quanlynhanvien" class="admin-menu__item-link">Quản lý nhân viên</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlysanpham" class="admin-menu__item-link active">Quản lý sản phẩm</a>
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
                                    <a href="?controller=quanlynhanvien" class="admin-menu__item-link">Quản lý nhân viên</a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=quanlysanpham" class="admin-menu__item-link active">Quản lý sản phẩm</a>
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
                            <h3 class="admin-content__heading">Quản lý sản phẩm</h3><br>
                            <form>
                                <input type="hidden" name="controller" value="quanlysanpham">
                                <input
                                    style="     width: 400px;
                                                max-width: 100%;
                                                height:45px;
                                                padding-left: 16px;
                                                margin-bottom: 10px;
                                                font-size: 1.5rem;
                                                font-weight:bold;
                                                border: 2px solid var(--primary-color);
                                                outline: none;"
                                type="search" name="keyword" placeholder="Tìm sản phẩm ... "  value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
                            </form>
                            <a href="?controller=themsanpham" class="admin-content__add-product">Thêm sản phẩm</a>
                            <div class="admin__product">
                                <table class="admin__product-table">
                                    <thead>
                                        <tr>
                                            <th class="admin__product-table-th">Mã sản phẩm</th>    
                                            <th class="admin__product-table-th">Hình ảnh</th>
                                            <th class="admin__product-table-th">Tên sản phẩm</th>
                                            <th class="admin__product-table-th">Giá</th>
                                            <th class="admin__product-table-th">Đánh giá trung bình</th>
                                            <th class="admin__product-table-th">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($product as $key => $value){ ?>
                                        <tr>
                                            <td class="admin__product-table-td"><?php echo $value['id'] ?></td>
                                            <td class="admin__product-table-td"><img src="<?php echo $value['image']?>" style="width:70px; height: 70px"></td>
                                            <td class="admin__product-table-td"><?php echo $value['name'] ?></td>
                                            <td class="admin__product-table-td"><?php echo $value['price'] ?></td>
                                            <td class="admin__product-table-td">
                                                <?php  if ($value['total_rate'] && $value['rate_times'] != NULL){ ?>
                                                    <div class="rateResult" data-rateyo-rating="<?php echo number_format($value['total_rate'] / $value['rate_times'],1); ?>"></div>
                                                <?php }else{ ?>
                                                <?php  echo "Chưa có đánh giá";} ?>
                                            </td>
                                            <td class="admin__product-table-td">
                                                <input onclick="window.location ='?controller=xulisanpham&method=edit&id=<?php echo $value['id']; ?>'" type="button" class="btn-option" value="Sửa">
                                                <input type="hidden" name="product-id" value="<?php echo $value['id'] ?>">
                                                <input onclick="window.location ='?controller=xulisanpham&method=del&id=<?php echo $value['id']; ?>'" type="button" class="btn-option" value="Xóa">
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                readOnly: true,
                starWidth: "30px"
            });
            });
            });
    </script>
</body>
</html>