<?php
require './connectDB.php';
$ma_bviet = $_GET['ma_bviet'];
$conn = connectDB();

$query = "SELECT * FROM `baiviet` as bv JOIN `theloai` as tl JOIN `tacgia` as tg 
            WHERE ma_bviet = '$ma_bviet' AND bv.ma_tloai = tl.ma_tloai AND tg.ma_tgia = bv.ma_tgia;";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>CSE2023</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <main class="container mt-5">
        <button type="button" class="btn btn-secondary mb-5">
            <a href="/index.php" class="text-decoration-none text-light">Home</a>
        </button>
        <div class="row mb-5">
            <div class="col-sm-4">
                <img src=<?= $data['hinhanh'] ?? "images/songs/cayvagio.jpg" ?> class="img-fluid" alt="...">
            </div>
            <div class="col-sm-8">
                <h5 class="card-title mb-2">
                    <a href="" class="text-decoration-none">
                        <?= $data['tieude']  ?>
                    </a>
                </h5>
                <p class="card-text">
                    <span class=" fw-bold">Bài hát: </span>
                    <?= ($data['ten_bhat'])   ?>
                </p>
                <p class="card-text">
                    <span class=" fw-bold">Thể loại: </span>
                    <?= ($data['ten_tloai'])   ?>
                </p>
                <p class="card-text">
                    <span class=" fw-bold">Tóm tắt: </span>
                    <?= ($data['tomtat'])   ?>
                </p>
                <p class="card-text">
                    <span class=" fw-bold">Nội dung: </span>
                    <?= ($data['noidung']) ?? $data['tomtat']  ?>
                </p>
                <p class="card-text">
                    <span class=" fw-bold">Tác giả: </span>
                    <?= ($data['ten_tgia'])   ?>
                </p>

            </div>
        </div>

    </main>
</body>

</html>