<?php
session_start();
include_once('../config.php');
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$produk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id=$id"));
unlink("../asset/gambar/" . $produk['gambar']);

mysqli_query($conn, "DELETE FROM produk WHERE id=$id");
header("Location: produk.php");
