<?php
include './header.php';
require '../connectDB.php';
$value =  $_POST['txtCatName'] ?? '';
$conn = connectDB();

$query = "INSERT INTO `theloai`(`ma_tloai`, `ten_tloai`) VALUES ('','$value');";
$result = mysqli_query($conn, $query);

?>
<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
      <form action="add_category.php" method="POST">
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tên thể loại</span>
          <input type="text" class="form-control" name="txtCatName" value=" ">
        </div>

        <div class="form-group  float-end ">
          <input type="submit" value="Thêm" class="btn btn-success">
          <a href="category.php" class="btn btn-warning ">Quay lại</a>
        </div>
      </form>
    </div>
  </div>
</main>

<?php
require './footer.php';
?>
