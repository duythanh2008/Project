<?php
     $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
     $position_all = $database->get('position',array());
     $gender_all = $database->get('gender',array());
     switch ($_GET['method']){
          case 'edit':
               $id = $_GET['id'];
               $data_admin=$database->get('admin',array('id'=>$id));
               function checkDateFormat($date)
               {
               // match the format of the date
               if (preg_match ("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $date, $parts))
               {

               // check whether the date is valid or not
               if (checkdate($parts[2],$parts[3],$parts[1])) {
                    return true;
               } else {
                    return false;
               }

               } else {
               return false;
               }
               }
               if (isset($_POST['edit-admin'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $fullname = $_POST['fullname'];
                    $gender = $_POST['gender'];
                    $position = $_POST['position'];
                    $date = $_POST['date'];
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
                    if ($date == ''){
                        $error['date']= "Vui lòng nhập ngày sinh";
                   }else{
                        if (checkDateFormat($date) == false){
                             $error['date']= "Định dạng ngày không đúng";
                        }
                   }
                   if ($gender == ''){
                        $error['password']= "Vui lòng nhập giới tính";
                   }
                   if ($position == ''){
                        $error['position']= "Vui lòng nhập họ và tên";
                   }
                    if (!$error){
                         $database->update('admin',array(
                              'username'=>$username,
                              'password'=>$password,
                              'fullname'=>$fullname,
                              'date'=>$date,
                              'gender'=>$gender,
                              'lv'=>$position
                         ),array('id'=>$id));
                         echo "<script type='text/javascript'>alert('Sửa thông tin nhân viên thành công');</script>";
                         header("Refresh:0.2; url=?controller=quanlynhanvien");
                    }
               }
               require_once('./View/V-xulinhanvien.php');
               break;
          case 'del':
               $id = $_GET['id'];
               if ($id == $admin[0]['id']){
                    header('location:?controller=quanlynhanvien');
               }else{
                    $del = $database->del('admin',array('id'=>$id));
                    if (isset($del)){
                         header('location:?controller=quanlynhanvien');
                    }
               }
               require_once('./View/V-quanlynhanhvien.php');
               break;
          default:
               header('location:?controller=quanlynhanvien');
               break;
     }
     require_once('./View/V-xulinhanvien.php');
?>