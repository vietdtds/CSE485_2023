<?php
include './header.php';
require '../connectDB.php';
$conn = connectDB();
$id = $_GET['id'];
$query = "SELECT * FROM `baiviet` WHERE `ma_bviet` = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>

<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <h3 class="text-center text-uppercase fw-bold">Sửa thông tin bài viết</h3>
      <form action="handle_edit_article.php" method="post">
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatId">Mã bài viết</span>
          <input type="text" class="form-control" name="ma_bviet" readonly value="<?= $data['ma_bviet'] ?? '' ?>">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatId">Mã thể loại</span>
          <input type="text" class="form-control" name="ma_tloai" readonly value="<?= $data['ma_tloai'] ?? '' ?>">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatId">Mã tác giả</span>
          <input type="text" class="form-control" name="ma_tgia" readonly value="<?= $data['ma_tgia'] ?? '' ?>">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tiêu đề</span>
          <input type="text" class="form-control" name="tieude" value="<?= $data['tieude'] ?? '' ?> ">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tên bài hát</span>
          <input type="text" class="form-control" name="ten_bhat" value="<?= $data['ten_bhat'] ?? '' ?> ">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tóm tắt</span>
          <input type="text" class="form-control" name="tomtat" value="<?= $data['tomtat'] ?? '' ?> ">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Nội dung</span>
          <input type="text" class="form-control" name="noidung" value="<?= $data['noidung'] ?? '' ?> ">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Ngày viết</span>
          <input type="text" class="form-control" name="ngayviet" readonly value="<?= $data['ngayviet'] ?? '' ?> ">
        </div>

        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Hình ảnh</span>
          <input type="text" class="form-control" name="hinhanh" value="<?= $data['hinhanh'] ?? '' ?> ">
        </div>

        <div class=" form-group float-end ">
          <input type="submit" value="Lưu lại" class="btn btn-success">
          <a href="article.php" class="btn btn-warning ">Quay lại</a>
        </div>
      </form>
    </div>
  </div>
</main>

<?php
require './footer.php'
?>