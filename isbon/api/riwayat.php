<?php
session_start();
include '../config.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$user_id = $_SESSION['user_id'];

// Jalankan query
$query = "SELECT * FROM pesanan WHERE user_id = $user_id ORDER BY tanggal_pesanan DESC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}
?>
