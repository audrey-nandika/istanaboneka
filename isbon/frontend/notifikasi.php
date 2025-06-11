<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Notifikasi - IsBon</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten Notifikasi -->
  <main class="max-w-4xl mx-auto px-4 py-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Notifikasi</h2>

    <div class="space-y-4">
      <!-- Notifikasi Baru -->
      <div class="bg-pink-50 border-l-4 border-pink-500 p-4 rounded shadow">
        <p class="font-semibold text-pink-600">Pesanan Anda #INV123456 sedang diproses</p>
        <p class="text-sm text-gray-600 mt-1">8 Juni 2025 - 10:15 WIB</p>
      </div>

      <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded shadow">
        <p class="font-semibold text-green-600">Pembayaran Anda telah berhasil diverifikasi</p>
        <p class="text-sm text-gray-600 mt-1">8 Juni 2025 - 09:45 WIB</p>
      </div>

      <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded shadow">
        <p class="font-semibold text-yellow-600">Pesanan #INV123456 sedang dalam pengiriman</p>
        <p class="text-sm text-gray-600 mt-1">8 Juni 2025 - 11:30 WIB</p>
      </div>

      <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded shadow">
        <p class="font-semibold text-blue-600">Promo baru! Dapatkan diskon 20% untuk pembelian boneka beruang.</p>
        <p class="text-sm text-gray-600 mt-1">7 Juni 2025 - 14:00 WIB</p>
      </div>

      <!-- Tidak Ada Notifikasi -->
      <!--
      <div class="text-center text-gray-500 py-20">
        <p>Belum ada notifikasi saat ini.</p>
      </div>
      -->
    </div>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
