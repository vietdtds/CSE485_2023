<?php 
require '../connectDB.php';
$conn = connectDB();
$valueCategory = $_REQUEST['ten_tloai'];
$idCategory = $_REQUEST['ma_tloai'];
$queryUpdate = "UPDATE `theloai` SET `ten_tloai`='$valueCategory' WHERE `ma_tloai` = '$idCategory'";
$resultUpdate = mysqli_query($conn, $queryUpdate);

header("Location: http://localhost/CSE485_2023/admin/category.php");

?>