<?php
    session_start();
    if (!isset($_SESSION['qty'])){
        $_SESSION['qty'] = 0;
    }
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
        case 'chitietsanpham':
            require_once './Controller/C-chitietsanpham.php';
            break;
        case 'sanpham':
            require_once './Controller/C-sanpham.php';
            break;
        case 'danhgiasanpham':
            require_once './Controller/C-danhgiasanpham.php';
            break;
        case 'lienhe':
            require_once './Controller/C-lienhe.php';
            break;
        case 'donhang':
            require_once './Controller/C-donhang.php';
            break;
        case 'chitietdonhang':
            require_once './Controller/C-chitietdonhang.php';
            break;
        case 'giohang':
            require_once './Controller/C-giohang.php';
            break;
        case 'themgiohang':
            require_once './Controller/C-themgiohang.php';
            break;
        case 'xuligiohang':
            require_once './Controller/C-xuligiohang.php';
            break;
        case 'thanhtoan':
            require_once './Controller/C-thanhtoan.php';
            break;
        case 'xulithanhtoan':
            require_once './Controller/C-xulithanhtoan.php';
            break;
        case 'xulithanhtoanonline':
            require_once './Controller/C-xulithanhtoanonline.php';
            break;
        case 'dangnhapquantri':
            require_once './Controller/C-dangnhapquantri.php';
            break;
        case 'dangxuatquantri':
            require_once './Controller/C-dangxuatquantri.php';
            break;
        case 'trangquantri':
            require_once './Controller/C-trangquantri.php';
            break;
        case 'quanlysanpham':
            require_once './Controller/C-quanlysanpham.php';
            break;
        case 'themsanpham':
            require_once './Controller/C-themsanpham.php';
            break;
        case 'xulisanpham':
            require_once './Controller/C-xulisanpham.php';
            break;
        case 'quanlynhanvien':
            require_once './Controller/C-quanlynhanvien.php';
            break;
        case 'themnhanvien':
            require_once './Controller/C-themnhanvien.php';
            break;
        case 'xulinhanvien':
            require_once './Controller/C-xulinhanvien.php';
            break;
        case 'quanlydanhgia':
            require_once './Controller/C-quanlydanhgia.php';
            break;
        case 'xulidanhgia':
            require_once './Controller/C-xulidanhgia.php';
            break;
        case 'quanlydonhang':
            require_once './Controller/C-quanlydonhang.php';
            break;
        case 'quanlydonhangchitiet':
            require_once './Controller/C-quanlydonhangchitiet.php';
            break;
        case 'xulidonhang':
            require_once './Controller/C-xulidonhang.php';
            break;
        case 'xulidonhangchitiet':
            require_once './Controller/C-xulidonhangchitiet.php';
            break;
        case 'xoadonhang':
            require_once './Controller/C-xoadonhang.php';
            break;
        case 'quanlynguoidung':
            require_once './Controller/C-quanlynguoidung.php';
            break;
        case 'xulinguoidung':
            require_once './Controller/C-xulinguoidung.php';
            break;
    }
?>