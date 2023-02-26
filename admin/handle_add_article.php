<?php 
require '../connectDB.php';
$conn = connectDB();
$valueTitle =  $_REQUEST['valueTitle'];
$valueSong =  $_REQUEST['valueSong'];
$valueCategogy =  $_REQUEST['valueCategogy'];
$valueSummary =  $_REQUEST['valueSummary'];
$valueContent =  $_REQUEST['valueContent'];
$valueAuthor =  $_REQUEST['valueAuthor'];
$valueDays =  $_REQUEST['valueDay'];
$valueImg =  $_REQUEST['valueImg'];
$query = "INSERT INTO `baiviet` VALUES ('','$valueTitle','$valueSong','$valueCategogy','$valueSummary','$valueContent','$valueAuthor','$valueDays','$valueImg');";
$result = mysqli_query($conn, $query);


header("Location: http://localhost/CSE485_2023/admin/article.php");
