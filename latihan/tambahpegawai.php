<?php 
session_start();
include 'php/koneksi.php';
require 'php/prosestambah.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Tambah Pegawai</h2>
    <form method="POST">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
        <label >Kategori</label>
        <select class="form-select" aria-label="Default select example" name="kategori">
                <option selected>Open this select menu</option>
                <option value="Freelance">Freelance</option>
                <option value="Part Time">Part Time</option>
                <option value="Full Time">Full Time</option>
                </select>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
</div>
</body>
</html>