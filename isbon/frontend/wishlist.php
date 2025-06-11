<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Wishlist - IsBon</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>
  <!-- Konten -->
  <main class="max-w-7xl mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Wishlist Saya</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Contoh item wishlist -->
      <div class="border rounded shadow hover:shadow-lg transition">
        <img src="img/produk-panda.jpg" alt="Boneka Panda" class="w-full h-52 object-cover rounded-t">
        <div class="p-4">
          <h3 class="font-semibold text-lg text-gray-800">Boneka Panda</h3>
          <p class="text-pink-500 font-semibold mt-1 mb-3">Rp 75.000</p>
          <div class="flex justify-between items-center">
            <a href="detail-produk.php?id=123" class="text-sm text-pink-600 hover:underline">Lihat Detail</a>
            <form method="POST" action="hapus-wishlist.php">
              <input type="hidden" name="produk_id" value="123">
              <button class="text-sm text-red-500 hover:text-red-700">Hapus</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tambahkan lebih banyak produk menggunakan loop PHP -->
    </div>

    <!-- Jika kosong -->
    <!--
    <p class="text-center text-gray-500 mt-12">Wishlist Anda masih kosong.</p>
    -->

  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
