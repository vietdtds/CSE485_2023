<?php 
require '../connectDB.php';
$conn = connectDB();

$valueName =  $_REQUEST['valueName']; 
$valueImg =  $_REQUEST['valueImg'] ;
$query = "INSERT INTO `tacgia` VALUES ('','$valueName','$valueImg');";
$result = mysqli_query($conn, $query);
header("Location: http://localhost/CSE485_2023/admin/author.php");
