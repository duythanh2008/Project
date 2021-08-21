<?php
     $id = $_GET['id'];
     $database->del('user_order_detail',array('order_id'=>$id));
     $database->del('user_order',array('id'=>$id));
     header('location:?controller=quanlydonhang');
?>