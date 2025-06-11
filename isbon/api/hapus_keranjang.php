<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: ../frontend/login.php");
  exit;
}

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM keranjang WHERE id = $id AND user_id = " . $_SESSION['user_id']);

header("Location: ../frontend/keranjang.php");
exit;
