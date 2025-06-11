<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ulasan Produk - IsBon</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten -->
  <main class="max-w-3xl mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Tulis Ulasan Produk</h2>

    <!-- Produk yang akan diulas -->
    <div class="bg-gray-50 p-4 rounded shadow mb-6 flex items-center">
      <img src="img/produk-panda.jpg" alt="Boneka Panda" class="w-24 h-24 object-cover rounded mr-4">
      <div>
        <h3 class="text-lg font-semibold">Boneka Panda</h3>
        <p class="text-sm text-gray-500">Kode Produk: BD00123</p>
      </div>
    </div>

    <!-- Form ulasan -->
    <form action="proses-ulasan.php" method="POST" class="space-y-5">
      <input type="hidden" name="produk_id" value="123"> <!-- Contoh ID produk -->

      <div>
        <label for="rating" class="block font-medium mb-1">Rating</label>
        <select name="rating" id="rating" class="w-full border-gray-300 rounded px-4 py-2" required>
          <option value="">-- Pilih Rating --</option>
          <option value="5">★★★★★ - Sangat Baik</option>
          <option value="4">★★★★☆ - Baik</option>
          <option value="3">★★★☆☆ - Cukup</option>
          <option value="2">★★☆☆☆ - Kurang</option>
          <option value="1">★☆☆☆☆ - Buruk</option>
        </select>
      </div>

      <div>
        <label for="ulasan" class="block font-medium mb-1">Ulasan</label>
        <textarea name="ulasan" id="ulasan" rows="5" class="w-full border-gray-300 rounded px-4 py-2" placeholder="Tulis pengalamanmu menggunakan produk ini..." required></textarea>
      </div>

      <div class="text-right">
        <button type="submit" class="bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-600 font-semibold">
          Kirim Ulasan
        </button>
      </div>
    </form>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
