<?php
session_start();
include_once('../config.php');

// Cek apakah admin sudah login
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Ambil data ringkasan
$jumlah_produk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM produk"))['total'];
$jumlah_pesanan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM pesanan"))['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin - Isbon</title>
    <link rel="stylesheet" href="../asset/style.css">
</head>
<body>
    <h2>Selamat Datang, <?= $_SESSION['admin_username'] ?></h2>
    <a href="produk.php">Kelola Produk</a> | 
    <a href="pesanan.php">Kelola Pesanan</a> | 
    <a href="logout.php">Logout</a>

    <h3>Ringkasan:</h3>
    <ul>
        <li>Total Produk: <?= $jumlah_produk ?></li>
        <li>Total Pesanan: <?= $jumlah_pesanan ?></li>
    </ul>
</body>
</html>
