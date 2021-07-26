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
    }
?>