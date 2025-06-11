<?php
session_start();
include_once('../config.php');
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_POST['id'];
$status = $_POST['status'];

mysqli_query($conn, "UPDATE pesanan SET status='$status' WHERE id=$id");
header("Location: pesanan.php");
