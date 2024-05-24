<?php
include '../config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
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
?>

<!DOCTYPE html>
<html>

<head>
    <title>Table Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../paket-wisata.php">Paket Wisata</a></li>
            <li><a href="#">Daftar Pesanan</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </nav>
    <h2>Table Pendaftaran</h2>
    <div class="table-container">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal</th>
            </tr>
            <?php
            if (!empty($pendaftaran_data)) {
                // Ulangi array untuk menampilkan data
                foreach ($pendaftaran_data as $row) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["email"] . "</td><td>" . $row["tanggal"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>

<?php
$conn->close();
?>