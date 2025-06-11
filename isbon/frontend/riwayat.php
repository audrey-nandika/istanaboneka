<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Riwayat Pesanan - IsBon</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Riwayat Pesanan -->
  <main class="max-w-7xl mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Riwayat Pesanan</h2>

    <!-- Tabel Riwayat -->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200 shadow-md rounded">
        <thead class="bg-pink-100 text-pink-700">
          <tr>
            <th class="py-3 px-6 text-left">ID Pesanan</th>
            <th class="py-3 px-6 text-left">Tanggal</th>
            <th class="py-3 px-6 text-left">Status</th>
            <th class="py-3 px-6 text-left">Total</th>
            <th class="py-3 px-6 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <!-- Contoh Data (bisa diganti loop PHP nantinya) -->
          <tr class="border-b hover:bg-gray-50">
            <td class="py-4 px-6">#INV20240601</td>
            <td class="py-4 px-6">08 Juni 2025</td>
            <td class="py-4 px-6 text-yellow-500 font-semibold">Diproses</td>
            <td class="py-4 px-6">Rp 225.000</td>
            <td class="py-4 px-6 text-center">
              <a href="detail-pesanan.php?id=INV20240601" class="text-pink-600 hover:underline">Lihat Detail</a>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-50">
            <td class="py-4 px-6">#INV20240528</td>
            <td class="py-4 px-6">28 Mei 2025</td>
            <td class="py-4 px-6 text-green-600 font-semibold">Selesai</td>
            <td class="py-4 px-6">Rp 150.000</td>
            <td class="py-4 px-6 text-center">
              <a href="detail-pesanan.php?id=INV20240528" class="text-pink-600 hover:underline">Lihat Detail</a>
            </td>
          </tr>
          <!-- Tambahkan baris lainnya sesuai data pesanan -->
        </tbody>
      </table>
    </div>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
