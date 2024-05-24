<?php
include '../config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}

// Permintaan untuk mendapatkan data
$sql = "SELECT * FROM pendaftaran";
$result = $conn->query($sql);

// Inisialisasi array untuk menampung hasilnya
$pendaftaran_data = [];

if ($result->num_rows > 0) {
    // Ambil semua hasil ke dalam array
    while ($row = $result->fetch_assoc()) {
        $pendaftaran_data[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Table Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php">Pahawang Adventures</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn2" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn2" href="../paket-wisata.php">Paket Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn2 active" href="#">Daftar Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn2" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
    <h2 class="text-center">Table Pendaftaran</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-nowrap">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal</th>
                        <th>No.HP / TELP</th>
                        <th>Jumlah Orang</th>
                        <th>Durasi</th>
                        <th>Penginapan</th>
                        <th>Transportasi</th>
                        <th>Makanan</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($pendaftaran_data)) {
                        foreach ($pendaftaran_data as $row) {
                    ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["nama"] ?></td>
                            <td><?= $row["email"] ?></td>
                            <td><?= $row["tanggal"] ?></td>
                            <td><?= $row["notelp"] ?></td>
                            <td><?= $row["jmlorg"] ?></td>
                            <td><?= $row["durasi"] ?></td>
                            <td class="text-center"><?= $row["paket1"] == 1 ? "<span class='badge badge-success'>✓</span>" : "<span class='badge badge-danger'>X</span>"?></td>
                            <td class="text-center"><?= $row["paket2"] == 1 ? "<span class='badge badge-success'>✓</span>" : "<span class='badge badge-danger'>X</span>" ?></td>
                            <td class="text-center"><?= $row["paket3"] == 1 ? "<span class='badge badge-success'>✓</span>" : "<span class='badge badge-danger'>X</span>"    ?></td>
                            <td>Rp <?= number_format($row["total"], 0, ',', '.') ?></td>
                            <td>
                                <a href='update.php?id=<?= $row["id"] ?>' class='btn3 btn-primary btn-sm mr-2'>Update</a>
                                <a href='delete.php?id=<?= $row["id"] ?>' class='btn4 btn-danger btn-sm' onclick='return confirm("Kamu yakin ingin menghapus data ini?");'>Hapus</a>
                            </td>
                        </tr>
                    <?php }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>
