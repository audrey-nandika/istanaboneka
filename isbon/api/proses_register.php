<?php
include '../config.php';

$nama       = htmlspecialchars($_POST['nama_lengkap']);
$username   = htmlspecialchars($_POST['username']);
$email      = htmlspecialchars($_POST['email']);
$telepon    = htmlspecialchars($_POST['telepon']);
$password   = $_POST['password'];
$konfirmasi = $_POST['confirm_password'];

if ($password !== $konfirmasi) {
    echo "<script>alert('Password tidak cocok!'); window.history.back();</script>";
    exit;
}

// Cek apakah email atau username sudah digunakan
$cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' OR username='$username'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Email atau Username sudah digunakan!'); window.history.back();</script>";
    exit;
}

// Hash password
$hash = password_hash($password, PASSWORD_DEFAULT);

// Simpan ke database
$query = "INSERT INTO users (nama_lengkap, username, email, telepon, password) 
          VALUES ('$nama', '$username', '$email', '$telepon', '$hash')";
$simpan = mysqli_query($conn, $query);

if ($simpan) {
    header("Location: ../frontend/login.php"); // ganti path sesuai struktur folder
    exit;
} else {
    echo "<script>alert('Gagal mendaftar!'); window.history.back();</script>";
}
?>
