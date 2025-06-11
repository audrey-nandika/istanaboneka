<?php
session_start();
include_once('../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
    if (mysqli_num_rows($query) == 1) {
        $admin = mysqli_fetch_assoc($query);
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_username'] = $admin['username'];
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Password salah!']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Username tidak ditemukan!']);
    }
}
?>
