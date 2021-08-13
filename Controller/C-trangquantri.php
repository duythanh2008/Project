<?php
    if(isset($_SESSION['admin'])){
        $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
    }
    else{
        header('location: ?controller=dangnhapquantri');
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $month = date('m', time());
    $profit_all = $database->get('profit', array());
    $profit_current_month = $database->get('profit', array('month'=>$month));
    $profit_previous_month = $database->get('profit', array('month'=>$month - 1));
    $user_order = $database->get_all_month('user_order',array('time_order'=>$month));
    $user_order_not_confirmed = $database->get_all_month2('user_order',array('status'=>0),array('time_order'=>$month));
    $user_order_confirmed = $database->get_all_month2('user_order',array('status'=>1),array('time_order'=>$month));
    $profit =0;
    foreach ($user_order_confirmed as $key => $value){
        $profit += $value['amount'];
    }
    $all_product = 0;
    foreach ($user_order as $key => $value){
        foreach ($database->get('user_order_detail',array('order_id'=>$value['id'])) as $key => $values){
            $all_product += $values['qty'];
        }
    }
    $ex_product = 0;
    foreach ($user_order_not_confirmed as $key => $value){
        foreach ($database->get('user_order_detail',array('order_id'=>$value['id'])) as $key => $values){
            $ex_product += $values['qty'];
        }
    }
    $profit_data = $database->get('profit',array('month'=>$month));
    if (!$profit_data){
        $database->insert('profit',array(
            'month'=>$month,
            'profit'=>$profit,
            'all_order'=>count($user_order),
            'sold_product'=>($all_product - $ex_product),
            'order_not_confirm'=>count($user_order_not_confirmed)
        ));
    }else{
        $database->update('profit',array(
            'month'=>$month,
            'profit'=>$profit,
            'all_order'=>count($user_order),
            'sold_product'=>($all_product - $ex_product),
            'order_not_confirm'=>count($user_order_not_confirmed)
        ),array('id'=>$profit_data[0]['id']));
    }
    require_once './View/V-trangquantri.php';
?>