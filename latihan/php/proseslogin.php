<?php
include('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if ($result->num_rows > 0) {
        $_SESSION['login'] = true;
        header("Location: index.php");
    } else {
        $error = "Username atau password salah!";
    }
}
?>