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
    <?php
    $username = "root"; // Khai báo username
    $password = "";      // Khai báo password
    $server   = "localhost";   // Khai báo server
    $dbname   = "btth01_cse485";      // Khai báo database

    // Kết nối database tintuc
    $connect = mysqli_connect($server, $username, $password, $dbname);

    //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
    if (!$connect) {
        die("Không kết nối :" . mysqli_connect_error());
        exit();
    }

    ?>
    <?php include 'header.php'; ?>

    <main class="container-fluid mt-3">
        <h3 class="text-center text-uppercase mb-3 text-primary">TOP bài hát yêu thích</h3>
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <img src="images/songs/cayvagio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="./detail.php" class="text-decoration-none">Cây, lá và gió</a>
                        </h5>

                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <img src="images/songs/csmt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="./detail.php" class="text-decoration-none">Cuộc sống mến thương</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <img src="images/songs//longme.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="./detail.php" class="text-decoration-none">Lòng mẹ</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <img src="images/songs/phoipha.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="./detail.php" class="text-decoration-none">Phôi pha</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <img src="images/songs/noitinhyeubatdau.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center my-title">
                            <a href="./detail.php" class="text-decoration-none">Nơi tình yêu bắt đầu</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>

</html>