<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout Berhasil</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
  <?php include 'navbar.php'; ?>

  <main class="max-w-2xl mx-auto text-center py-20">
    <h1 class="text-3xl font-bold text-green-600 mb-4">✅ Checkout Berhasil!</h1>
    <p class="text-lg mb-6">Terima kasih telah berbelanja di <strong>Istana Boneka</strong>!</p>
    <a href="riwayat_pesanan.php" class="bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-600">Lihat Riwayat Pesanan</a>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>
