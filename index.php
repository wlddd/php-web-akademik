<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-3">
        <nav class="nav nav-pills nav-fill shadow">
            <a class="nav-link active" aria-current="page" href="index.php">Pilihan Pendaftaran</a>
            <a class="nav-link" href="pendaftaran.php">Daftar</a>
            <a class="nav-link" href="hasil.php">Hasil</a>
            <a class="nav-link" href="tabel_pendaftaran.php">List Pendaftaran</a>
        </nav>
    </div>
    <div class="container mt-5 d-flex justify-content-evenly">
        <div class="card" style="width: 18rem;">
            <img src="assets/image/akademik.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Beasiswa Akademik</h5>
                <p class="card-text">Beasiswa akademik diberikan berdasarkan prestasi akademik, seperti nilai rapor atau indeks prestasi, serta berdasarkan kemampuan akademik yang ditunjukkan melalui ujian masuk atau seleksi lainnya.</p>
                <a href="pendaftaran.php" class="btn btn-primary btn-lg">Daftar</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/image/nonakademik.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Beasiswa non Akademik</h5>
                <p class="card-text">Beasiswa yang diberikan kepada seseorang yang tidak berdasarkan prestasi akademik, tetapi berdasarkan faktor lain seperti kemampuan dalam bidang olahraga, seni, atau kegiatan sosial lainnya. </p>
                <a href="pendaftaran.php" class="btn btn-primary btn-lg">Daftar</a>
            </div>
        </div>
    </div>
</body>

</html>