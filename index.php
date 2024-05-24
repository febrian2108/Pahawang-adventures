<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pahawang Adventures</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn2 active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn2" href="paket-wisata.php">Paket Wisata</a>
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
        <h1 class="text-center">Selamat datang di Pahawang Adventures!</h1>
        <div class="text-center my-4">
            <img src="asset/pulau-pahawang-lampung.jpeg" class="img-fluid" alt="Pulau Pahawang">
        </div>
        <p class="text-justify">Lampung - Pulau Pahawang adalah destinasi wisata di Lampung yang menyimpan sederet potensi bahari. Tak heran jika pulau ini berhasil mencuri hati wisatawan. Dikutip dari Dinas Pariwisata Kabupaten Pesawaran, Pulau Pahawang bahkan dikunjungi ribuan wisatawan tiap harinya sebelum pandemi terjadi. Lalu, apa yang membuat Pulau Pahawang begitu menarik di mata wisatawan? Pulau Pahawang menyuguhkan laut biru dan pasir putih yang luar biasa indah. Sepanjang mata memandang pantai terbentang di bagian di bagian utara, timur dan selatan. Sementara sisanya diisi oleh rimbunan hutan mangrove. Jika dilihat lebih dekat, Pulau Pahawang tidak hanya menyajikan panorama laut biru.kehijauan. Namun, ada juga berbagai jenis terumbu karang yang turut menghiasi keindahan dalam lautnya. Keindahan itu bisa dieksplorasi wisatawan melalui kegiatan snorkeling maupun diving. Salah satu spot snorkling terbaik di Pulau Pahawang terletak di Taman Nemo. Disana wisatawan bisa menjelajah dalam air sambil menikmati terumbu karang dan ditemani ikan-ikan cantik.</p>
        <p class="text-justify">Daya tarik di Pulau Pahawang ini tentunya tidak sekedar pada alamnya saja. Masyarakat setempat pun kompak menjaga kebersihan dan kealamian dari Pulau Pahawang ini. Sehingga nuansanya tetap terjaga dengan baik. Pulau yang memiliki luas kurang lebih 700 hektare dengan keliling 12 kilometer ini terbagi menjadi dua, yakni Pulau Pahawang besar dan Pulau Pahawang kecil. Masing-masing pulau punya daya tarik yang berbeda. Pulau Pahawang besar lebih terkenal sebagai spot wisata dan pusat snorkling. Makanya, wisatawan banyak memadati pulau ini untuk menikmati keseruan wahana lautnya. Sementara untuk wisatawan yang lebih senang menghabiskan waktu di tempat yang tenang dan belum dijamah banyak orang, Pulau Pahawang kecil wajib dikunjungi. Wisatawan juga bebas mengeksplor keindahan alam dan ketenangan suasana di pulau ini. Keindahan alam Pulau Pahawang kecil yang memiliki luas 13 hektar ini tidak terbatas pada itu saja. Ada goa bawah laut dan kapal selam yang dihuni kumpulan ikan nemo. Wisatawan juga bisa memandang Jembatan Tanjung Putus lewat Pulau Pahawang kecil. Jembatan ini menghubungkan Pulau Pahawang kecil dengan Pulau Tanjung Putus yang tak kalah indah panoramanya.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
