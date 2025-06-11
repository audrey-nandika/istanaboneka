<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<header class="shadow sticky top-0 bg-white z-50">
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-pink-600">IsBon</h1>
    
    <!-- Menu Utama -->
    <nav class="space-x-6">
      <a href="home.php" class="text-gray-700 hover:text-pink-500">Beranda</a>
      <a href="produk.php" class="text-gray-700 hover:text-pink-500">Produk</a>
      <a href="tentang.php" class="text-gray-700 hover:text-pink-500">Tentang Kami</a>
      <a href="kontak.php" class="text-gray-700 hover:text-pink-500">Kontak</a>
    </nav>

    <!-- Aksi Kanan -->
    <div class="flex items-center space-x-4">
      <a href="keranjang.php" class="hover:text-pink-600 text-lg">🛒</a>

      <?php if (isset($_SESSION['user_id'])): ?>
        <a href="notifikasi.php" class="hover:text-pink-600 text-lg">🔔</a>
        <a href="profil.php" class="hover:text-pink-600 text-lg">👤</a>
        <a href="../api/logout.php" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 text-sm">Logout</a>
      <?php else: ?>
        <a href="login.php" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 text-sm">Login</a>
      <?php endif; ?>
    </div>
  </div>
</header>
