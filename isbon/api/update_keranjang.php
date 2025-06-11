<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: ../frontend/login.php");
  exit;
}

$id = $_POST['id'];
$jumlah = (int)$_POST['jumlah'];

if ($jumlah < 1) {
  $jumlah = 1;
}

mysqli_query($conn, "UPDATE keranjang SET jumlah = $jumlah WHERE id = $id AND user_id = " . $_SESSION['user_id']);

header("Location: ../frontend/keranjang.php");
exit;
