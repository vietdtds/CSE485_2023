<?php
require '../connectDB.php';
$conn = connectDB();
$ma_bviet = $_REQUEST['ma_bviet'];
$tieude = $_REQUEST['tieude'];
$ten_bhat = $_REQUEST['ten_bhat'];
$tomtat = $_REQUEST['tomtat'];
$noidung = $_REQUEST['noidung'];
$hinhanh = $_REQUEST['hinhanh'];
$query = "UPDATE `baiviet` SET 
          `tieude`='$tieude', 
          `ten_bhat` = '$ten_bhat', 
          `tomtat` = '$tomtat',
          `noidung` = '$noidung',
          `hinhanh` = '$hinhanh'  
          WHERE `ma_bviet` = $ma_bviet";
$result = mysqli_query($conn, $query);

header("Location: http://localhost/CSE485_2023/admin/article.php");
