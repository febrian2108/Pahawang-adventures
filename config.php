<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pariwisata_lampung";

/* menginisialisasi variabel koneksi, membuat objek mysqli untuk menghubungkan ke database MySQL 
"pariwisata_lampung" menggunakan server "localhost" dengan pengguna "root" tanpa kata sandi, dan 
memeriksa koneksi untuk mengakhiri skrip dengan pesan kesalahan jika koneksi gagal */

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
