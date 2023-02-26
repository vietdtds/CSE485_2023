<?php
include './header.php';
require '../connectDB.php';
$conn = connectDB();
$id = $_GET['id'];
$query = "SELECT * FROM `tacgia` WHERE `ma_tgia` = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>

<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tác giả</h3>
      <form action="handle_edit_author.php" method="post">
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatId">Mã tác giả</span>
          <input type="text" class="form-control" name="ma_tgia" readonly value="<?= $data['ma_tgia'] ?? '' ?>">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tên tác giả</span>
          <input type="text" class="form-control" name="ten_tgia" value="<?= $data['ten_tgia'] ?? '' ?> ">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Ảnh tác giả</span>
          <input type="text" class="form-control" name="hinh_tgia" value="<?= $data['hinh_tgia'] ?? '' ?> ">
        </div>

        <div class=" form-group float-end ">
          <input type="submit" value="Lưu lại" class="btn btn-success">
          <a href="author.php" class="btn btn-warning ">Quay lại</a>
        </div>
      </form>
    </div>
  </div>
</main>

<?php
require './footer.php'
?>