<?php
     $admin = $database->get('admin', array('id'=>$_SESSION['admin']));
     $catalog_all = $database->get('catalog',array());
     switch ($_GET['method']){
          case 'edit':
               $id = $_GET['id'];
               $data_product=$database->get('product',array('id'=>$id));
               if (isset($_POST['edit-product'])){
                    $name = $_POST['name'];
                    $price= $_POST['price'];
                    $image = $_FILES['image'];
                    $image2 = $_FILES['image2'];
                    $image3 = $_FILES['image3'];
                    $image4 = $_FILES['image4'];
                    $description= $_POST['desc'];
                    $catalog = $_POST['catalog'];
                    $qty = $_POST['qty'];
                    $error = array();
                    if ($name == ''){
                         $error['name']="Tên sản phầm không được để trống !";
                    }
                    if ($price == ''){
                         $error['price']="Giá sản phầm không được để trống !";
                    }
                    if ($description == ''){
                         $error['description']="Mô tả sản phầm không được để trống !";
                    }
                    if ($catalog == ''){
                         $error['catalog']="Danh mục sản phầm không được để trống !";
                    }
                    if ($qty == ''){
                         $error['qty']="Số lượng sản phầm không được để trống !";
                    }
                    if ( $image['name'] != '' && $image2['name'] != '' && $image3['name'] != '' && $image4['name'] != ''){
                         $link= './Assets/Img/';
                         $target_file= $link.basename($image['name']);
                         if ($image['size'] > 5242880) {
                              $error['image']="Chỉ được upload file dưới 5md";
                         }
                         $file_type= pathinfo($image['name'], PATHINFO_EXTENSION);
                              $file_type_allow=array('png','jpg','jpeg','gif');
                              if (!in_array(strtolower($file_type), $file_type_allow)) {
                                        $error['image']="Chưa upload ảnh hoặc định dạng ảnh không đúng !";
                              }
                         $target_file= substr($target_file, 0, strrpos($target_file, "."));
                         $target_file.=".".$file_type;
                         move_uploaded_file($image['tmp_name'], $target_file);
                         $link2= './Assets/Img/';
                         $target_file2= $link2.basename($image2['name']);
                         if ($image2['size'] > 5242880) {
                            $error['image2']="Chỉ được upload file dưới 5md";
                         }
                         $file_type2= pathinfo($image2['name'], PATHINFO_EXTENSION);
                            $file_type_allow2=array('png','jpg','jpeg','gif');
                            if (!in_array(strtolower($file_type2), $file_type_allow2)) {
                                    $error['image2']="Chưa upload ảnh hoặc định dạng ảnh không đúng !";
                            }
                         $target_file2= substr($target_file2, 0, strrpos($target_file2, "."));
                         $target_file2.=".".$file_type2;
                         move_uploaded_file($image2['tmp_name'], $target_file2);
                         $link3= './Assets/Img/';
                         $target_file3= $link3.basename($image3['name']);
                         if ($image3['size'] > 5242880) {
                             $error['image3']="Chỉ được upload file dưới 5md";
                         }
                         $file_type3= pathinfo($image3['name'], PATHINFO_EXTENSION);
                             $file_type_allow3=array('png','jpg','jpeg','gif');
                             if (!in_array(strtolower($file_type3), $file_type_allow3)) {
                                     $error['image3']="Chưa upload ảnh hoặc định dạng ảnh không đúng !";
                             }
                         $target_file3= substr($target_file3, 0, strrpos($target_file3, "."));
                         $target_file3.=".".$file_type3;
                         move_uploaded_file($image3['tmp_name'], $target_file3);
                         $link4= './Assets/Img/';
                         $target_file4= $link4.basename($image4['name']);
                         if ($image4['size'] > 5242880) {
                             $error['image4']="Chỉ được upload file dưới 5md";
                         }
                         $file_type4= pathinfo($image4['name'], PATHINFO_EXTENSION);
                             $file_type_allow4=array('png','jpg','jpeg','gif');
                             if (!in_array(strtolower($file_type4), $file_type_allow4)) {
                                     $error['image4']="Chưa upload ảnh hoặc định dạng ảnh không đúng !";
                             }
                         $target_file4= substr($target_file4, 0, strrpos($target_file4, "."));
                         $target_file4.=".".$file_type4;
                         move_uploaded_file($image4['tmp_name'], $target_file4); 
                    }
                    if ($image['name'] != '' && $image2['name'] != '' && $image3['name'] != '' && $image4['name'] != '' && !$error){
                         $database->update('product',array(
                              'name'=>$name,
                              'price'=>$price,
                              'image'=>$target_file,
                              'image2'=>$target_file2,
                              'image3'=>$target_file3,
                              'image4'=>$target_file4,
                              'description'=>$description,
                              'catalog'=>$catalog,
                              'qty'=>$qty
                           ),array('id'=>$id));
                           header('location:?controller=quanlysanpham');
                    }
                    if ($image['name'] == '' || $image2['name'] == '' || $image3['name'] == '' || $image4['name'] == '' && !$error){
                         $database->update('product',array(
                              'name'=>$name,
                              'price'=>$price,
                              'description'=>$description,
                              'catalog'=>$catalog,
                              'qty'=>$qty
                           ),array('id'=>$id));
                           header('location:?controller=quanlysanpham');
                    }
               }
               require_once('./View/V-xulisanpham.php');
               break;
          case 'del':
               $id = $_GET['id'];
               $del = $database->del('product',array('id'=>$id));
               header('location:?controller=quanlysanpham');
               break;
          default:
               header('location:?controller=trangquantri');
               break;
     }
     require_once('./View/V-xulisanpham.php');
?>