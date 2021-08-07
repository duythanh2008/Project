<?php
     $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
     switch ($_GET['method']){
          case 'confirm':
               $id = $_GET['id'];
               $data_rating=$database->get('rating',array('id'=>$id));
               $product=$database->get('product',array('id'=>$data_rating[0]['product_id']));
               $database->update('rating',array('status'=>1),array('id'=>$id));
               $database->update('product',array(
                'total_rate'=>$product[0]['total_rate'] + $data_rating[0]['rate'],
                'rate_times'=>$product[0]['rate_times'] + 1
                ),array('id'=>$data_rating[0]['product_id']));
                header('location:?controller=quanlydanhgia');
               break;
          case 'del':
                $id = $_GET['id'];
                $del = $database->del('rating',array('id'=>$id));
                header('location:?controller=quanlydanhgia');
                break;
          default:
               header('location:?controller=quanlydanhgia');
               break;
     }
?>