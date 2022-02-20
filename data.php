<?php
require 'functions.php';
$peserta = query("SELECT * FROM peserta");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" rel="stylesheet">
    <title>Ujian Tengah Semester 123190042</title>
</head>

<body class="form">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Ujian Tengah Semester</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="form.html">Form</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="warna container">
        <br>
        <h2 class="container">Data Peserta</h2>
        <hr>

        <table cellpadding="20" class="container table table-striped table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Alat</th>
            </tr>
            <?php $i = 1;
            foreach ($peserta as $p) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $p['nim']; ?></td>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['tempat']; ?></td>
                    <td><?= $p['tgl']; ?></td>
                    <td><?= $p['alamat']; ?></td>
                    <td><?= $p['gender']; ?></td>
                    <td><?= $p['agama']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $p['id']; ?>">
                            <font>Ubah</font>
                        </a> | <a href=" hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Apakah anda yakin?');">
                            <font>Hapus</font>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br><br>
        <div>
            <button type="button" class="btn btn-info">
                <a href="form.php">
                    <font>Tambah Data</font>
                </a>
            </button>
            <br>
        </div>

    </div>






    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>