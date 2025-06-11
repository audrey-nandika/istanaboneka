<?php
session_start();
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $identitas = htmlspecialchars($_POST['identitas']); // bisa email atau username
  $password  = $_POST['password'];

  // Cari user berdasarkan email atau username
  $sql = "SELECT * FROM users WHERE email = '$identitas' OR username = '$identitas' LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
      // Simpan session
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['nama'] = $user['nama_lengkap'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];
      
      // Arahkan ke halaman utama
      echo "<script>alert('Login berhasil!'); window.location.href = '../frontend/home.php';</script>";
      exit;
    } else {
      echo "<script>alert('Email/Username atau Password salah!'); window.history.back();</script>";
    }
  } else {
    echo "<script>alert('Akun tidak ditemukan!'); window.history.back();</script>";
  }
}
?>
