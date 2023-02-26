<?php
include './header.php';
require '../connectDB.php';
$conn = connectDB();
$id = $_GET['id'];
$query = "SELECT * FROM `theloai` WHERE `ma_tloai` = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>

<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
      <form action="handle_edit_category.php" method="post">
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatId">Mã thể loại</span>
          <input type="text" class="form-control" name="ma_tloai" readonly value="<?= $data['ma_tloai'] ?? '' ?>">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tên thể loại</span>
          <input type="text" class="form-control" name="ten_tloai" value="<?= $data['ten_tloai'] ?? '' ?> ">
        </div>

        <div class=" form-group float-end ">
          <input type="submit" value="Lưu lại" class="btn btn-success">
          <a href="category.php" class="btn btn-warning ">Quay lại</a>
        </div>
      </form>
    </div>
  </div>
</main>

<?php
require './footer.php'
?>