<?php
require 'functions.php';
$id = $_GET['id'];
$p = query("SELECT * FROM peserta WHERE id = '$id'")[0];

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
                    <a class="nav-link" href="form.php">Form</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="warna container">
        <br>
        <div class="jq container">
            <?php
            if (isset($_POST['ubah'])) {
                if (ubah($_POST) > 0) {
                    echo "<script>
          alert('Data anda berhasil diubah');
          document.location.href = 'data.php';
          </script>";
                } else {
                    echo "<p><font>Data gagal diubah</p></font>";
                }
            }
            ?>
        </div>
        <br>
        <h2 class="container">Form Ubah Data Mahasiswa</h2>
        <hr>
        <table cellpadding="20" class="container">
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?= $p['id']; ?>">
                <tr>
                    <td width="300px">
                        <font margin-left="50px">NIM</font>
                    </td>
                    <td width="600px" colspan="2">
                        <div class="form-group">
                            <div class="col-md-50">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="nim" value="<?= $p['nim']; ?>" autofocus required>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300px">
                        <font margin-left="50px">Nama</font>
                    </td>
                    <td colspan="2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?= $p['nama']; ?>" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300px">
                        <font margin-left="50px">Tempat, Tanggal Lahir</font>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tempat" value="<?= $p['tempat']; ?>" required>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="date" class="form-control" id="exampleInputEmail1" name="tgl" value="<?= $p['tgl']; ?>" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300px">
                        <font margin-left="50px">Alamat</font>
                    </td>
                    <td colspan="2">
                        <div class="form-group">
                            <textarea name="alamat" required><?= $p['alamat']; ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300px">
                        <font margin-left="50px">Jenis Kelamin</font>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="radio" name="gender" id="gender" value="Laki-Laki" <?php if ($p['gender'] == 'Laki-Laki') echo 'checked' ?> required>
                            <font>Laki-Laki</font>
                            <input type="radio" name="gender" id="gender" value="Perempuan" <?php if ($p['gender'] == 'Perempuan') echo 'checked' ?> required>
                            <font>Perempuan</font>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300px">
                        <font margin-left="50px">Agama</font>
                    </td>
                    <td>
                        <div class="form-group">
                            <select name="agama">
                                <option value="Islam" <?php if ($p['agama'] == 'Islam') echo 'selected' ?>>Islam</option>
                                <option value="Buddha" <?php if ($p['agama'] == 'Buddha') echo 'selected' ?>>Budha</option>
                                <option value="Kristen" <?php if ($p['agama'] == 'Kristen') echo 'selected' ?>>Kristen</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300px">
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                                <font>Oke, selesai ya?</font>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="300px">
                        <button type="submit" class="btn btn-primary" name="ubah">Change</button>
                    </td>
                    <td>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </td>
                    <br><br><br><br>
                </tr>

            </form>
        </table>

    </div>






    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>