CREATE DATABASE IF NOT EXISTS pegawai_db;
USE pegawai_db;

-- Tabel untuk data pegawai
CREATE TABLE pegawai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    umur INT NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    deskripsi TEXT NOT NULL
);

-- Tabel untuk data pengguna
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Contoh data pengguna
INSERT INTO users (username, password) VALUES ('admin', 'admin');
