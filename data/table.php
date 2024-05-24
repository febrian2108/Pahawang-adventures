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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
    <div class="container mt-5">
        <h2 class="text-center">Table Pendaftaran</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($pendaftaran_data)) {
                        foreach ($pendaftaran_data as $row) {
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["nama"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["tanggal"] . "</td>
                                <td>
                                    <a href='update.php?id=" . $row["id"] . "' class='btn3 btn-primary btn-sm'>Update</a>
                                    <a href='delete.php?id=" . $row["id"] . "' class='btn4 btn-danger btn-sm' onclick='return confirm(\"Kamu yakin ingin menghapus data ini?\");'>Hapus</a>
                                </td>
                            </tr>";
                        }
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
