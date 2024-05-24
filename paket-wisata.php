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

    $sql = "INSERT INTO pendaftaran (nama, email, tanggal) VALUES ('$nama', '$email', '$tanggal')";
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
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Paket Wisata</a></li>
            <li><a href="data/table.php">Daftar Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <h2>Form Pendaftaran</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br>
        Email: <input type="email" name="email" required><br>
        Tanggal: <input type="date" name="tanggal" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
