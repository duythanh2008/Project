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
                <?php include('./View/menu-admin.php') ?>
            </div>
            <div class="col l-10 m-12 c-12">
                <?php include('./View/header-admin.php') ?>
                <div class="admin-content">
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <h3 class="admin-content__heading wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Quản lý đơn hàng</h3><br>
                            <div class="result-detail wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                <?php if (isset($error['product'])){?> 
                                            <p><?php echo $error['product']; ?></p>
                                <?php } ?>
                                <?php if (isset($error['detail'])){?> 
                                            <p><?php echo $error['detail']; ?></p>
                                <?php } ?>
                            </div>
                            <div class="admin__product">
                                <table class="admin__product-table wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                                    <thead>
                                        <tr>
                                            <th class="admin__product-table-th">Mã / ID</th>    
                                            <th class="admin__product-table-th">Họ và tên</th>
                                            <th class="admin__product-table-th">Địa chỉ</th>
                                            <th class="admin__product-table-th">Số điện thoại</th>
                                            <th class="admin__product-table-th">Tổng tiền</th>
                                            <th class="admin__product-table-th">Thời gian đặt hàng</th>
                                            <th class="admin__product-table-th">Trạng thái</th>
                                            <th class="admin__product-table-th">Phương thúc thanh toán</th>
                                            <th class="admin__product-table-th">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($order_not_confirm as $key => $value){ ?>
                                        <tr>
                                            <td class="admin__product-table-td"><?php echo $value['id'] ?></td>
                                            <td class="admin__product-table-td"><?php echo $value['fullname']?></td>
                                            <td class="admin__product-table-td"><?php echo $value['address']?></td>
                                            <td class="admin__product-table-td"><?php echo $value['phone']?></td>
                                            <td class="admin__product-table-td"><?php echo number_format($value['amount']) ?>đ</td>
                                            <td class="admin__product-table-td"><?php echo $value['time_order']?></td>
                                            <td class="admin__product-table-td" style="color: red">Chưa xác nhận</td>
                                            <td class="admin__product-table-td"><?php if ($value['payment_method'] == 0){
                                                                                    echo "Thanh toán khi nhận hàng";
                                                                                }else{
                                                                                    echo "Thanh toán online";
                                                                                } ?></td>
                                            <td class="admin__product-table-td">
                                                <input onclick="window.location ='?controller=xulidonhang&id=<?php echo $value['id']; ?>'" type="button" class="btn-option" value="Duyệt">
                                                <input onclick="window.location ='?controller=quanlydonhangchitiet&id=<?php echo $value['id']; ?>'" type="button" class="btn-option" value="Chi tiết">
                                                <input onclick="window.location ='?controller=xoadonhang&id=<?php echo $value['id']; ?>'" type="button" class="btn-option" value="Xóa">
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php foreach($order_confirmed as $key => $value){ ?>
                                        <tr>
                                            <td class="admin__product-table-td"><?php echo $value['id'] ?></td>
                                            <td class="admin__product-table-td"><?php echo $value['fullname']?></td>
                                            <td class="admin__product-table-td"><?php echo $value['address']?></td>
                                            <td class="admin__product-table-td"><?php echo $value['phone']?></td>
                                            <td class="admin__product-table-td"><?php echo number_format($value['amount']) ?>đ</td>
                                            <td class="admin__product-table-td"><?php echo $value['time_order']?></td>
                                            <td class="admin__product-table-td" style="color: #33CC1F">Đã xác nhận</td>
                                            <td class="admin__product-table-td"><?php if ($value['payment_method'] == 0){
                                                                                    echo "Thanh toán khi nhận hàng";
                                                                                }else{
                                                                                    echo "Thanh toán online";
                                                                                } ?></td>
                                            <td class="admin__product-table-td">
                                                <input onclick="window.location ='?controller=quanlydonhangchitiet&id=<?php echo $value['id']; ?>'" type="button" class="btn-option" value="Chi tiết">
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
                readOnly: true
            });
            });
            });
    </script>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>