<?php
    if(isset($_SESSION['customer'])){
        $user = $database->get('user_info', array('id'=>$_SESSION['customer']));
    }
    $catalog = $database->get('catalog',array());
               $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:15;
               $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
               $offset = ($current_page - 1) * $item_per_page;
               $product = $database->get_offset('product',array(),$item_per_page,$offset);
               $totalRecords = $database->get2('product');
               $totalRecords = $totalRecords->num_rows;
               $totalPages = ceil($totalRecords / $item_per_page);
               $begin = '';
               $end = '';
               if (isset ($_GET['id'])){
                   $catalog_id = $_GET['id'];
                   $product = $database->get('product',array('catalog'=>$catalog_id));
                   $totalPages = 1;
               }
     if (isset($_POST['search'])){
          if (isset($_POST['catalog'])){
               $catalog_list = $_POST['catalog'];
          }
          if (isset($catalog_list) && $catalog_list != ''){
               if (isset($_POST['price'])){
                    switch($_POST['price']){
                         case '1':
                              $begin = 1;
                              $end = 200000;
                              break;
                         case '2':
                              $begin = 200000;
                              $end = 400000;
                              break;
                         case '3':
                              $begin = 400000;
                              $end = 600000;
                              break;
                         case '4':
                              $begin = 600000;
                              $end = 800000;
                              break;
                         case '5':
                              $begin = 800000;
                              $end = 200000000000;
                              break;
                         default:
                              break;
                    }
               }
                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:40;
                    $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                    $offset = ($current_page - 1) * $item_per_page;
                    $product = $database->get_full_results('product',array('catalog'=>$catalog_list),$begin,$end,$item_per_page,$offset);
                    $totalRecords = $database->get_full_results('product',array('catalog'=>$catalog_list),$begin,$end,$item_per_page,$offset);
                    $totalRecords = $totalRecords->num_rows;
                    $totalPages = ceil($totalRecords / $item_per_page);
                    require_once('./View/V-sanpham.php');
          }else{
               $product = $database->get_offset('product',array(),$item_per_page,$offset);
               if (isset($_POST['price'])){
                    switch($_POST['price']){
                         case '1':
                              $begin = 1;
                              $end = 200000;
                              break;
                         case '2':
                              $begin = 200000;
                              $end = 400000;
                              break;
                         case '3':
                              $begin = 400000;
                              $end = 600000;
                              break;
                         case '4':
                              $begin = 600000;
                              $end = 800000;
                              break;
                         case '5':
                              $begin = 800000;
                              $end = 200000000000;
                              break;
                         default:
                              break;
                    }
                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:40;
                    $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                    $offset = ($current_page - 1) * $item_per_page;
                    $product = $database->get_find2('product',array(),$begin,$end);
                    $totalRecords = $database->get_find2('product',array(),$begin,$end);
                    $totalRecords = $totalRecords->num_rows;
                    $totalPages = ceil($totalRecords / $item_per_page);
                    require_once('./View/V-sanpham.php');
               }
          }
     }
    require_once './View/V-sanpham.php';
?>