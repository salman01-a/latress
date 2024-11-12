<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];

    $conn->query("INSERT INTO pegawai (nama, umur, alamat, deskripsi, kategori) VALUES ('$nama', $umur, '$alamat', '$deskripsi', '$kategori')");
    header("Location: index.php");
}

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>