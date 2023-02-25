<?php
include './header.php';
require '../connectDB.php';
$valueTitle =  $_POST['valueTitle'] ?? '';
$valueSong =  $_POST['valueSong'] ?? '';
$valueCategogy =  $_POST['valueCategogy'] ?? '';
$valueSummary =  $_POST['valueSummary'] ?? '';
$valueContent =  $_POST['valueContent'] ?? '';
$valueAuthor =  $_POST['valueAuthor'] ?? '';
$valueDays =  $_POST['valueDay'] ?? '';
$valueImg =  $_POST['valueImg'] ?? '';


$conn = connectDB();

$query = "INSERT INTO `baiviet`(`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES ('','$valueTitle','$valueSong','$valueCategogy','$valueSummary','$valueContent','$valueAuthor','$valueDays','$valueImg');";
$result = mysqli_query($conn, $query);

?>
<main class="container mt-5 mb-5">
  <div class="row">
    <div class="col-sm">
      <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
      <form action="add_article.php" method="POST">
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tiêu đề </span>
          <input type="text" class="form-control" name="valueTitle" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tên bài hát </span>
          <input type="text" class="form-control" name="valueSong" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Mã thể loại</span>
          <input type="text" class="form-control" name="valueCategogy" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Tóm tắt</span>
          <input type="text" class="form-control" name="valueSummary" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Nội dung</span>
          <input type="text" class="form-control" name="valueContent" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Mã tác giả</span>
          <input type="text" class="form-control" name="valueAuthor" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Ngày viết</span>
          <input type="text" class="form-control" name="valueDays" value=" ">
        </div>
        <div class="input-group mt-3 mb-3">
          <span class="input-group-text" id="lblCatName">Hình ảnh</span>
          <input type="text" class="form-control" name="valueImg" value=" ">
        </div>

        <div class="form-group  float-end ">
          <input type="submit" value="Thêm" class="btn btn-success">
          <a href="article.php" class="btn btn-warning ">Quay lại</a>
        </div>
      </form>
    </div>
  </div>
</main>

<?php
require './footer.php';
?>
