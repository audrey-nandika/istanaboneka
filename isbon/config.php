<?php
// Konfigurasi koneksi database
$host = "localhost";         // Biasanya localhost
$user = "root";              // Ganti dengan user MySQL kamu
$password = "";              // Ganti jika ada password MySQL
$database = "isbon";      // Ganti sesuai nama database kamu

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Atur charset ke UTF-8 (penting untuk karakter unik dan emoji)
$conn->set_charset("utf8");
?>
