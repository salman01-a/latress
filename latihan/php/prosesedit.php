<?php
include('koneksi.php');

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM pegawai WHERE id=$id");
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];

    $conn->query("UPDATE pegawai SET nama='$nama', umur=$umur, alamat='$alamat', deskripsi='$deskripsi', kategori = '$kategori' WHERE id=$id");
    header("Location: index.php");
}
?>