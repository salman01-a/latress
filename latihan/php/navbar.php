<?php
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Perusahaan Sungut Lele</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Halaman Utama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tambahpegawai.php">Tambah Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="logout.php" onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
            </li>
        </ul>
    </div>
</nav>
