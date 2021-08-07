<?php
     $id = $_GET['id'];
     $database->del('user_order',array('id'=>$id));
     header('location:?controller=quanlydonhang');
?>