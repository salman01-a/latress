<?php
session_start();
include('php/koneksi.php');
require('php/navbar.php'); // Memuat navbar

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Mendapatkan parameter 'kategori' dari URL untuk menentukan kategori pekerjaan yang dipilih
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';

// Query default untuk mendapatkan semua pegawai
$query = "SELECT * FROM pegawai";

// Jika parameter 'kategori' ada dan tidak kosong, tambahkan filter kategori ke query
if ($kategori) {
    $query .= " WHERE kategori = '$kategori'";
}

// Eksekusi query
$result = $conn->query($query);

// Periksa apakah query berhasil
if ($result === false) {
    die("Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2 class="mt-5">Daftar Pegawai</h2>

    <!-- Tombol Sorting Berdasarkan Kategori -->
    <div class="mb-3">
        <a href="index.php?kategori=Full Time" class="btn btn-primary <?= $kategori == 'Full Time' ? 'active' : '' ?>">Full Time</a>
        <a href="index.php?kategori=Part Time" class="btn btn-primary <?= $kategori == 'Part Time' ? 'active' : '' ?>">Part Time</a>
        <a href="index.php?kategori=Freelance" class="btn btn-primary <?= $kategori == 'Freelance' ? 'active' : '' ?>">Freelance</a>
        <a href="index.php" class="btn btn-secondary <?= $kategori == '' ? 'active' : '' ?>">All</a>
    </div>

    <a href="tambahpegawai.php" class="btn btn-success mb-3">Tambah Pegawai</a>
    <a href="proses_logout.php" class="btn btn-danger mb-3">Logout</a>
    
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['umur'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><?= $row['kategori'] ?></td> <!-- Menampilkan kategori -->
                <td>
                    <a href="editpegawai.php?id=<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="php/proses_hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
