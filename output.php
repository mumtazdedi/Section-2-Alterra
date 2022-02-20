<?php
require 'functions.php';
//ambil id dari url
$id = $_GET('id');
//query peserta berdasarkan id
$p = query("SELECT * FROM peserta WHERE id = $id");
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

<body class="form container">

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
          <a class="nav-link" href="form.php">Form</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="warna container">
    <h2 class="h2 container">Detail Data Peserta</h2>
    <hr>
    <table cellpadding="20" class="container table table-strip table-dark">
      <tr>
        <td width="300px">
          <font margin-left="50px">NIM</font>
        </td>
        <td width="600px" colspan="2">
          <?= $p['nim']; ?>
        </td>
      </tr>
      <tr>
        <td width="300px">
          <font margin-left="50px">Nama</font>
        </td>
        <td colspan="2">
          <div class="form-group">
            <?= $p['nama']; ?>
          </div>
        </td>
      </tr>
      <tr>
        <td width="300px">
          <font margin-left="50px">Tempat, Tanggal Lahir</font>
        </td>
        <td>
          <div class="form-group">
            <?= $p['tempat']; ?>
          </div>
        </td>
      </tr>
      <tr>
        <td width="300px">
          <font margin-left="50px">Alamat</font>
        </td>
        <td colspan="2">
          <div class="form-group">
            <?= $p['alamat']; ?>
          </div>
        </td>
      </tr>
      <tr>
        <td width="300px">
          <font margin-left="50px">Jenis Kelamin</font>
        </td>
        <td>
          <div class="form-group">
            <?= $p['gender']; ?>
          </div>
        </td>
      </tr>
      <tr>
        <td width="300px">
          <font margin-left="50px">Agama</font>
        </td>
        <td>
          <div class="form-group">
            <?= $p['agama']; ?>
            </select>
          </div>
        </td>
      <tr>
        <td>
          <a href="">
            <font>Ubah</font>
          </a> | <a href="">
            <font>Hapus</font>
          </a>
        </td>
        <td>
          <a href="data.php">Kembali ke Data Peserta</a>
        </td>
      </tr>
      </tr>
    </table>
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>