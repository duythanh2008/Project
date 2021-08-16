<?php
     $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
     $position_all = $database->get('position',array());
     $gender_all = $database->get('gender',array());
     switch ($_GET['method']){
          case 'edit':
               $id = $_GET['id'];
               $data_user=$database->get('user_info',array('id'=>$id));
               if (isset($_POST['edit-admin'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $fullname = $_POST['fullname'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $error = array();
                    if ($username == ''){
                         $error['username']= "Vui lòng nhập tên đăng nhập";
                    }
                    if ($password == ''){
                         $error['password']= "Vui lòng nhập mật khẩu";
                    }
                    if ($fullname == ''){
                         $error['fullname']= "Vui lòng nhập họ và tên";
                    }
                    if ($address == ''){
                        $error['address']= "Vui lòng nhập địa chỉ";
                   }
                   if ($phone == ''){
                        $error['phone']= "Vui lòng nhập số điện thoại";
                   }
                   if ($email == ''){
                        $error['email']= "Vui lòng nhập địa chỉ email";
                   }
                    if (!$error){
                         $database->update('user_info',array(
                              'username'=>$username,
                              'password'=>$password,
                              'fullname'=>$fullname,
                              'address'=>$address,
                              'phone'=>$phone,
                              'email'=>$email,
                         ),array('id'=>$id));
                         echo "<script type='text/javascript'>alert('Sửa thông tin người dùng thành công');</script>";
                         header("Refresh:0.2; url=?controller=quanlynguoidung");
                    }
               }
               require_once('./View/V-xulinguoidung.php');
               break;
          case 'del':
                $id = $_GET['id'];
                $del = $database->del('user_info',array('id'=>$id));
                if (isset($del)){
                    header('location:?controller=quanlynguoidung');
                }
               require_once('./View/V-quanlynguoidung.php');
               break;
          default:
               header('location:?controller=quanlynguoidung');
               break;
     }
     require_once('./View/V-xulinguoidung.php');
?>