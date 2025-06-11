<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Invoice - IsBon</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @media print {
      .no-print {
        display: none;
      }
    }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten -->
  <main class="max-w-4xl mx-auto px-4 py-10">
    <div class="border p-6 shadow-lg rounded">
      <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold text-pink-600">Invoice #INV123456</h2>
        <span class="text-sm text-gray-500">Tanggal: 8 Juni 2025</span>
      </div>

      <div class="mb-6">
        <h3 class="font-semibold text-lg mb-2">Data Pelanggan</h3>
        <p>Nama: <strong>Ayu Lestari</strong></p>
        <p>Email: ayu@email.com</p>
        <p>No. Telepon: 0812-3456-7890</p>
        <p>Alamat: Jl. Melati No. 10, Bandung</p>
      </div>

      <div class="mb-6">
        <h3 class="font-semibold text-lg mb-2">Detail Pesanan</h3>
        <table class="min-w-full border">
          <thead class="bg-pink-100 text-pink-700">
            <tr>
              <th class="text-left py-2 px-4 border">Produk</th>
              <th class="text-center py-2 px-4 border">Qty</th>
              <th class="text-center py-2 px-4 border">Harga</th>
              <th class="text-center py-2 px-4 border">Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="py-3 px-4 border">Boneka Panda</td>
              <td class="text-center py-3 px-4 border">2</td>
              <td class="text-center py-3 px-4 border">Rp 75.000</td>
              <td class="text-center py-3 px-4 border">Rp 150.000</td>
            </tr>
            <tr class="border-b">
              <td class="py-3 px-4 border">Boneka Beruang</td>
              <td class="text-center py-3 px-4 border">1</td>
              <td class="text-center py-3 px-4 border">Rp 100.000</td>
              <td class="text-center py-3 px-4 border">Rp 100.000</td>
            </tr>
            <!-- Tambah baris produk lain jika ada -->
          </tbody>
        </table>
      </div>

      <div class="text-right mt-4">
        <p class="text-gray-600">Subtotal: <span class="font-semibold">Rp 250.000</span></p>
        <p class="text-gray-600">Ongkir: <span class="font-semibold">Rp 20.000</span></p>
        <p class="text-xl font-bold text-pink-600 mt-2">Total: Rp 270.000</p>
      </div>

      <div class="mt-6 text-center no-print">
        <button onclick="window.print()" class="bg-pink-500 text-white px-6 py-2 rounded hover:bg-pink-600">🖨️ Cetak Invoice</button>
      </div>
    </div>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
