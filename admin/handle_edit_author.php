<?php 
require '../connectDB.php';
$conn = connectDB();
$id = $_REQUEST['ma_tgia'];
$name = $_REQUEST['ten_tgia'];
$image = $_REQUEST['hinh_tgia'];
$query = "UPDATE `tacgia` SET `ten_tgia`='$name', `hinh_tgia` = '$image' WHERE `ma_tgia` = '$id'";
$result = mysqli_query($conn, $query);

header("Location: http://localhost/CSE485_2023/admin/author.php");
