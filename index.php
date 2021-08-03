<?php
    session_start();
    require_once './Model/M-database.php';
    include('./Assets/PHPMailer/class.smtp.php');
    include('./Assets/PHPMailer/class.phpmailer.php');
    $database = new database();
    if (isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }else{
        $controller = 'trangchu';
    }
    switch ($controller){
        case 'trangchu':
            require_once './Controller/C-trangchu.php';
            break;
        case 'dangnhap':
            require_once './Controller/C-dangnhap.php';
            break;
        case 'dangky':
            require_once './Controller/C-dangky.php';
            break;
        case 'thongtinkhachhang':
            require_once './Controller/C-thongtinkhachhang.php';
            break;
        case 'doimatkhaukhachhang':
            require_once './Controller/C-doimatkhaukhachhang.php';
            break;
        case 'quenmatkhau':
            require_once './Controller/C-quenmatkhau.php';
            break;
        case 'kiemtramail':
            require_once './Controller/C-kiemtramail.php';
            break;
        case 'nhapcode':
            require_once './Controller/C-nhapcode.php';
            break;
        case 'laylaimatkhau':
            require_once './Controller/C-laylaimatkhau.php';
            break;
        case 'laylaimatkhauthanhcong':
            require_once './Controller/C-laylaimatkhauthanhcong.php';
            break;
        case 'dangxuat':
            require_once './Controller/C-dangxuat.php';
            break;
        case 'sanpham':
            require_once './Controller/C-sanpham.php';
            break;
        case 'lienhe':
            require_once './Controller/C-lienhe.php';
            break;
        case 'donhang':
            require_once './Controller/C-donhang.php';
            break;
        case 'giohang':
            require_once './Controller/C-giohang.php';
            break;
    }
?>