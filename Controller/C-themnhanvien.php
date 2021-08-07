<?php
     $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
     $position_all = $database->get('position',array());
     $gender_all = $database->get('gender',array());
    if (isset($_POST['add-admin'])){
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
        }
        if ($gender == ''){
            $error['password']= "Vui lòng nhập giới tính";
        }
        if ($position == ''){
            $error['position']= "Vui lòng nhập họ và tên";
        }
        if (!$error){
                $database->insert('admin',array(
                    'username'=>$username,
                    'password'=>$password,
                    'fullname'=>$fullname,
                    'date'=>$date,
                    'gender'=>$gender,
                    'lv'=>$position
                ));
                echo "<script type='text/javascript'>alert('Thêm nhân viên thành công');</script>";
                header("Refresh:0.2; url=?controller=quanlynhanvien");
        }
    }
     require_once('./View/V-themnhanvien.php');
?>