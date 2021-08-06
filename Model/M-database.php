<?php
    class database{
        protected $conn= null;
        protected $host='localhost';
        protected $user='root';
        protected $pass='';
        protected $dbname='fashiongenz';
        public function __construct(){
             $this->connect();
        }
        public function connect(){
             $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
             if (!$this->conn){
                  echo "That bai";
                  exit();
             }
        }
        public function get($table,$condition=array()){
          //B1: tạo cấu trúc lệnh truy vấn
          $sql= "SELECT * FROM $table ";
          //B2:  kiểm tra xem có điều kiện không và cộng chuỗi tương ứng
          if(!empty($condition)){
               $sql.="WHERE";
               foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
               }
               $sql= trim($sql,"AND");
          }
          //B3: chạy câu lệnh sql
          $query = mysqli_query($this->conn, $sql);
          //B4: khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên và cho vào mảng đó
          $result=array();
          if ($query){
               while ($row= mysqli_fetch_assoc($query)){
                    $result[]=$row;
               }
          }
          //B5: trả về giá trị
          return $result;
     }
     public function get_like($table,$column,$value){
          //B1: Khởi tạo cấu trúc truy vấn sql
          $sql = "SELECT * FROM $table ";
          //B2: Cộng chuỗi phần điều kiện
          $sql.= " WHERE $column LIKE '%$value%'";
          //B3: Chạy câu lệnh sql
          $query = mysqli_query($this->conn, $sql);
           //B4: khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên và cho vào mảng đó
           $result=array();
           if ($query){
                while ($row= mysqli_fetch_assoc($query)){
                     $result[]=$row;
                }
           }
           //B5: trả về giá trị
           return $result;
     }
     public function dangnhap($user,$pass){
          $sql= "SELECT * FROM user_info where username = '$user' AND password = '$pass'";
          $query = mysqli_query($this->conn,$sql);
     }
     public function dangky($user,$pass){
          $sql= "INSERT INTO user_info(username,password) VALUES ('$user','$pass')";
          $query = mysqli_query($this->conn,$sql);
     }
     public function insert($table,$data=array()){
          //B1: Lấy giá trị của key cho vào 1 mảng
          $keys = array_keys($data);
          //B2: Xử lí chuỗi với mảng ở trên
          $fields= implode(",",$keys);
          //B3: Xử lí giá trị value
          $value_str ='';
          foreach ($data as $key => $value){
               $value_str .="'$value',";
          }
          //B4: Xóa dấu phẩy ở cuối câu
          $value_str = trim($value_str,",");
          //B5: Tạo cấu trúc câu lệnh sql
          $sql="INSERT INTO $table ($fields) VALUES ($value_str)";
          //B6: Chạy câu lệnh sql
          $query = mysqli_query($this->conn,$sql);
          return $query;
     }
     public function update($table,$data=array(),$condition=array()){
          $str = '';
          foreach ($data as $key => $value){
               $str.="$key = '$value',";
          }
          $str = trim($str,",");
          $sql = "UPDATE $table SET $str WHERE ";
          foreach ($condition as $key => $value){
               $sql.="$key = '$value' AND";
          }
          $sql = trim($sql,"AND");
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }
     public function del($table,$condition=array()){
          //B1: tạo cấu trúc lệnh truy vấn
          $sql= "DELETE FROM $table ";
          //B2:  kiểm tra xem có điều kiện không và cộng chuỗi tương ứng
               $sql.="WHERE";
               foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
               }
               $sql= rtrim($sql,"AND");
          //B3: chạy câu lệnh sql
          $query = mysqli_query($this->conn, $sql);
          //B4: khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên và cho vào mảng đó
          //B5: trả về giá trị
          return $query;
     }
     public function get_limit($table, $condition=array(),$limit){
          $sql = "SELECT * FROM $table";
          if (!empty($condition)){
               $sql.=" WHERE";
               foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
               }
               $sql = trim($sql,"AND");
          }
          $sql.= " LIMIT $limit";
          $query = mysqli_query($this->conn,$sql);
          $result = array();
          if ($query){
               while ($row = mysqli_fetch_assoc($query)){
                    $result[]= $row;
               }
          }
          return $result;
     }
     public function get_limit_desc($table, $condition=array(),$order_by,$limit){
          $sql = "SELECT * FROM $table";
          if (!empty($condition)){
               $sql.=" WHERE";
               foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
               }
               $sql = trim($sql,"AND");
          }
          $sql.= " ORDER BY $order_by DESC";
          $sql.= " LIMIT $limit";
          $query = mysqli_query($this->conn,$sql);
          $result = array();
          if ($query){
               while ($row = mysqli_fetch_assoc($query)){
                    $result[]= $row;
               }
          }
          return $result;
     }
     public function get_limit_asc($table, $condition=array(),$order_by,$limit){
          $sql = "SELECT * FROM $table";
          if (!empty($condition)){
               $sql.=" WHERE";
               foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
               }
               $sql = trim($sql,"AND");
          }
          $sql.= " ORDER BY $order_by ASC";
          $sql.= " LIMIT $limit";
          $query = mysqli_query($this->conn,$sql);
          $result = array();
          if ($query){
               while ($row = mysqli_fetch_assoc($query)){
                    $result[]= $row;
               }
          }
          return $result;
     }
     public function get_find($table,$condition=array(),$price1,$price2){
          //B1: tạo cấu trúc lệnh truy vấn
          $sql= "SELECT * FROM $table";
          //B2:  kiểm tra xem có điều kiện không và cộng chuỗi tương ứng
          if(!empty($condition)){
               $sql.=" WHERE";
               foreach ($condition as $key => $value){
                    $sql.= " $key = '$value'";
               }
          }else{
               $sql.=" WHERE";
          }
          $between ='';
          if ($price1 != null && $price2 != null){
               if (!empty($condition)){
                    $between .= " AND";
               }
               $between.=" price BETWEEN ".$price1." AND ".$price2;
               $sql .= $between;
          }
          //B3: chạy câu lệnh sql
          $query = mysqli_query($this->conn, $sql);
          //B4: khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên và cho vào mảng đó
          $result=array();
          if ($query){
               while ($row= mysqli_fetch_assoc($query)){
                    $result[]=$row;
               }
          }
          //B5: trả về giá trị
          return $result;
     }
     public function get_find2($table,$condition=array(),$price1,$price2){
          //B1: tạo cấu trúc lệnh truy vấn
          $sql= "SELECT * FROM $table";
          //B2:  kiểm tra xem có điều kiện không và cộng chuỗi tương ứng
          if(!empty($condition)){
               $sql.=" WHERE";
               foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
               }
               $sql= trim($sql,"AND");
          }else{
               $sql.=" WHERE";
          }
          $between ='';
          if ($price1 != null && $price2 != null){
               $between.=" AND price BETWEEN ".$price1." AND ".$price2;
               $sql .= $between;
          }
          //B3: chạy câu lệnh sql
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }
     public function get_offset($table,$condition=array(),$item_per_page,$offset){
          $sql= "SELECT * FROM $table";
          if(!empty($condition)){
               $sql.=" WHERE";
               foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
               }
               $sql= trim($sql,"AND");
          }
          if (isset($item_per_page)){
               $sql .= " ORDER BY `id` ASC  LIMIT " . $item_per_page ;
          }
          if (isset($offset)){
               $sql .= " OFFSET " . $offset;
          }
          $query = mysqli_query($this->conn,$sql);
          $result=array();
          if ($query){
               while ($row= mysqli_fetch_assoc($query)){
                    $result[]=$row;
               }
          }
          //B5: trả về giá trị
          return $result;
     }
     public function get2($table){
          $sql= "SELECT * FROM $table";
          $query = mysqli_query($this->conn,$sql);
          return $query;
     }
     public function get_full_results($table,$condition=array(),$price1=array(),$price2=array(),$item_per_page,$offset){
           //B1: tạo cấu trúc lệnh truy vấn
           $sql= "SELECT * FROM $table WHERE";
           //B2:  kiểm tra xem có điều kiện không và cộng chuỗi tương ứng
           if(!empty($condition)){
                foreach ($condition as $key => $value){
                     $sql .= " $key In(";
                     foreach ($value as $key => $values){
                          $sql.= "$values".',';
                     }
                     $sql = rtrim($sql,',');
                     $sql.=")";
                }
           }
           $between ='';
           if($price1 != null && $price2 != null){
               $between.= "AND price BETWEEN ".$price1." AND ".$price2;
               $sql.= $between;
           }
           if (isset($item_per_page)){
               $sql .=  " ORDER BY `id` ASC  LIMIT " . $item_per_page ;
          }
          if (isset($offset)){
               $sql .= " OFFSET " . $offset;
          }
          $query = mysqli_query($this->conn,$sql);
          //B5: trả về giá trị
          return $query;
     }
     public function sendMail($title,$content,$nTo,$mTo,$diachicc){
          $nFrom = 'Fashion GenZ';
          $mFrom = 'thanhnguyen15022008@gmail.com';
          $mPass = 'Duythanh2008';
          $mail = new PHPMailer();
          $body = $content;
          $mail->isSMTP();
          $mail->CharSet="utf-8";
          $mail->SMTPDebug=0;
          $mail->SMTPAuth=true;
          $mail->SMTPSecure="ssl";
          $mail->Host="smtp.gmail.com";
          $mail->Port=465;
          $mail->Username=$mFrom;
          $mail->Password=$mPass;
          $mail->setFrom($mFrom,$nFrom);
          $ccmail= explode(',',$diachicc);
          $ccmail= array_filter($ccmail);
          if(!empty($ccmail)){
               foreach ($ccmail as $key=>$value){
                    $mail->AddCC($value);
               }
          }
          $mail->Subject=$title;
          $mail->msgHTML($body);
          $address= $mTo;
          $mail->addAddress($address,$nTo);
          $mail->addReplyTo('thanhnguyen15022008@gmail.com','Fashion GenZ');
          if(!$mail->send()){
               return 0;
          } else{
               return 1;
          }
     }
    }
?>