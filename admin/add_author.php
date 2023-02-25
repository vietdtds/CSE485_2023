<?php
include './header.php';
require '../connectDB.php';
$valueName =  $_POST['valueName'] ?? ''; 
$valueImg =  $_POST['valueImg'] ?? '';

$conn = connectDB();

$query = "INSERT INTO `tacgia`(`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES ('','$valueName','$valueImg');";
$result = mysqli_query($conn, $query);

?>
<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <h3 class="text-center text-uppercase fw-bold">Thêm mới tác giả</h3>
      <form action="add_author.php" method="POST">
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tên tác giả</span>
          <input type="text" class="form-control" name="valueName" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Hình ảnh tác giả</span>
          <input type="text" class="form-control" name="valueImg" value=" ">
        </div>

        <div class="form-group  float-end ">
          <input type="submit" value="Thêm" class="btn btn-success">
          <a href="author.php" class="btn btn-warning ">Quay lại</a>
        </div>
      </form>
    </div>
  </div>
</main>

<?php
require './footer.php';
?>
