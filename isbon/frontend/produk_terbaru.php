<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Produk Terbaru - IsBon</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>
  
  <!-- Konten -->
  <main class="max-w-7xl mx-auto px-4 py-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Produk Terbaru (30 Hari Terakhir)</h2>

    <!-- Grid Produk -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Ulangi div ini untuk setiap produk -->
      <div class="border rounded shadow hover:shadow-md transition p-3">
        <a href="detail_produk.php?id=1">
          <img src="assets/img/produk1.jpg" alt="Produk 1" class="w-full h-48 object-cover rounded mb-3" />
          <h3 class="font-semibold text-lg text-gray-800">Boneka Panda Lucu</h3>
          <p class="text-pink-600 font-bold mt-1">Rp 75.000</p>
        </a>
      </div>
      <!-- Produk lainnya -->
      <div class="border rounded shadow hover:shadow-md transition p-3">
        <a href="detail_produk.php?id=2">
          <img src="assets/img/produk2.jpg" alt="Produk 2" class="w-full h-48 object-cover rounded mb-3" />
          <h3 class="font-semibold text-lg text-gray-800">Boneka Beruang Jumbo</h3>
          <p class="text-pink-600 font-bold mt-1">Rp 120.000</p>
        </a>
      </div>
      <!-- Tambahkan produk lain dari database sesuai tanggal -->
    </div>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
