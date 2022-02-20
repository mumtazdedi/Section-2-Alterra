<?php

function koneksi()
{
    //koneksi ke DB dan pilih DB
    return mysqli_connect('localhost', 'root', '', 'data_mhs');
}

function query($query)
{
    $conn = koneksi();
    //query 
    $result = mysqli_query($conn, $query);

    //jika yang dihasilkan hanya 1 data
    // if (mysqli_num_rows($result) == 1) {
    //     return mysqli_fetch_assoc($result);
    // } 

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $tempat = htmlspecialchars($data['tempat']);
    $tgl = htmlspecialchars($data['tgl']);
    $alamat = htmlspecialchars($data['alamat']);
    $gender = htmlspecialchars($data['gender']);
    $agama = htmlspecialchars($data['agama']);

    $query = "INSERT INTO 
                peserta 
                VALUES (null,'$nim', '$nama', '$tempat', '$tgl', '$alamat', '$gender', '$agama');
                ";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM peserta WHERE id = '$id'") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $tempat = htmlspecialchars($data['tempat']);
    $tgl = htmlspecialchars($data['tgl']);
    $alamat = htmlspecialchars($data['alamat']);
    $gender = htmlspecialchars($data['gender']);
    $agama = htmlspecialchars($data['agama']);

    $query = "UPDATE
                peserta 
                SET nim = '$nim', nama = '$nama', tempat = '$tempat', tgl = '$tgl', alamat = '$alamat', gender = '$gender', agama = '$agama' WHERE id = '$id'
                ";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
