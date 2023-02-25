<?php
include 'header.php';
require './connectDB.php';
$conn = connectDB();
$query = "SELECT * FROM `baiviet`;";
$result = mysqli_query($conn, $query);

?>

<main class="container-fluid mt-3">
  <h3 class="text-center text-uppercase mt-3 mb-4 text-secondary fs-2">TOP bài hát yêu thích</h3>
  <div class="row gy-3">
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-sm-3">
          <div class="card mb-2" id="card" style="width: 100%;">
            <img src=<?= $row['hinhanh'] ?? "images/songs/cayvagio.jpg" ?> class="card-img-top" id="cardImg" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">
                <a href="./detail.php?ma_bviet=<?= $row['ma_bviet'] ?>" class="text-decoration-none text-dark" id="cardTitle">
                  <?= $row['tieude'] ?>
                </a>
              </h5>

            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</main>

<?php include 'footer.php'; ?>