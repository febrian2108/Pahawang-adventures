<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $notelp = $_POST['notelp'];
    $jmlorg = $_POST['jmlorg'];
    $durasi = $_POST['durasi'];
    $paket1 = !empty ($_POST['paket1']) ? 1 : 0;
    $paket2 = !empty($_POST['paket2']) ? 1 : 0;
    $paket3 = !empty($_POST['paket3']) ? 1 : 0;
    $total = $_POST['total'];

    $sql = "INSERT INTO pendaftaran (nama, email, tanggal, notelp, jmlorg, durasi, paket1, paket2, paket3, total) VALUES ('$nama', '$email', '$tanggal', '$notelp', '$jmlorg', '$durasi', '$paket1', '$paket2', '$paket3', '$total')";
    if ($conn->query($sql) === TRUE) {
        header('Location: data/table.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Paket Wisata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Pahawang Adventures</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn2 active" href="#">Paket Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn2" href="data/table.php">Daftar Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn2" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Form Pendaftaran</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="notelp">No.HP / TELP:</label>
                        <input type="text" name="notelp" id="notelp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jmlorg">Jumlah Orang:</label>
                        <input type="number" name="jmlorg" id="jmlorg" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="durasi">Durasi Perjalanan:</label>
                        <input type="number" name="durasi" id="durasi" class="form-control" required>
                    </div>

                    <input type="checkbox" name="paket1" id="paket1"> <label for="paket1">Penginapan (Rp 1.000.000)</label> <br>
                    <input type="checkbox" name="paket2" id="paket2"> <label for="paket2">Transportasi (Rp 1.200.000)</label><br>
                    <input type="checkbox" name="paket3" id="paket3"> <label for="paket3">Makanan (Rp 500.000)</label><br><br>
                    <div class="form-group">
                        <label for="total">Total:</label>
                        <input type="text" name="total" id="total" class="form-control" required>
                    </div>
                    <div class="d-flex">
                        <button type="button" id="btn-hitung" class="btn btn-primary mr-2">Hitung</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>