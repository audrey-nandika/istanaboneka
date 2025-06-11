<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Detail Pesanan - IsBon</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten Detail Pesanan -->
  <main class="max-w-5xl mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Detail Pesanan</h2>

    <!-- Info Umum -->
    <div class="bg-gray-100 p-6 rounded mb-8 shadow">
      <p><strong>ID Pesanan:</strong> #INV20240601</p>
      <p><strong>Tanggal:</strong> 08 Juni 2025</p>
      <p><strong>Status:</strong> <span class="text-yellow-600 font-semibold">Diproses</span></p>
      <p><strong>Metode Pembayaran:</strong> Bayar di Tempat</p>
    </div>

    <!-- Daftar Produk -->
    <div class="overflow-x-auto mb-8">
      <table class="min-w-full bg-white border border-gray-200 shadow rounded">
        <thead class="bg-pink-100 text-pink-700">
          <tr>
            <th class="py-3 px-6 text-left">Produk</th>
            <th class="py-3 px-6 text-center">Harga</th>
            <th class="py-3 px-6 text-center">Jumlah</th>
            <th class="py-3 px-6 text-center">Subtotal</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <tr class="border-b">
            <td class="py-4 px-6">Boneka Panda</td>
            <td class="py-4 px-6 text-center">Rp 75.000</td>
            <td class="py-4 px-6 text-center">2</td>
            <td class="py-4 px-6 text-center">Rp 150.000</td>
          </tr>
          <tr class="border-b">
            <td class="py-4 px-6">Boneka Unicorn</td>
            <td class="py-4 px-6 text-center">Rp 90.000</td>
            <td class="py-4 px-6 text-center">1</td>
            <td class="py-4 px-6 text-center">Rp 90.000</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Ringkasan -->
    <div class="bg-gray-50 p-6 rounded shadow-md w-full sm:w-1/2 ml-auto">
      <div class="flex justify-between mb-2">
        <span class="font-medium">Subtotal</span>
        <span>Rp 240.000</span>
      </div>
      <div class="flex justify-between mb-2">
        <span class="font-medium">Ongkir</span>
        <span>Rp 10.000</span>
      </div>
      <div class="flex justify-between text-lg font-bold border-t pt-2">
        <span>Total</span>
        <span class="text-pink-600">Rp 250.000</span>
      </div>
    </div>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
