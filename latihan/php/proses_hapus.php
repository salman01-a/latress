<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Konversi ke integer untuk keamanan
    $query = "DELETE FROM pegawai WHERE id=$id";
    
    if ($conn->query($query) === TRUE) {
        header("Location: ../index.php?message=Data berhasil dihapus");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
