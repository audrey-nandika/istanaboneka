<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Konfirmasi Pembayaran - IsBon</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten Konfirmasi Pembayaran -->
  <main class="max-w-3xl mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Konfirmasi Pembayaran</h2>

    <form action="proses-konfirmasi.php" method="POST" enctype="multipart/form-data" class="space-y-6 bg-gray-50 p-6 rounded shadow-md">
      <div>
        <label for="order_id" class="block mb-1 font-medium">ID Pesanan</label>
        <input type="text" name="order_id" id="order_id" class="w-full border-gray-300 rounded px-4 py-2" placeholder="#INV20240601" required>
      </div>

      <div>
        <label for="nama_pengirim" class="block mb-1 font-medium">Nama Pengirim</label>
        <input type="text" name="nama_pengirim" id="nama_pengirim" class="w-full border-gray-300 rounded px-4 py-2" required>
      </div>

      <div>
        <label for="bank" class="block mb-1 font-medium">Bank Tujuan</label>
        <select name="bank" id="bank" class="w-full border-gray-300 rounded px-4 py-2" required>
          <option value="">-- Pilih Bank Tujuan --</option>
          <option value="BCA">BCA - 1234567890 a.n. IsBon Official</option>
          <option value="BNI">BNI - 0987654321 a.n. IsBon Official</option>
          <option value="Mandiri">Mandiri - 5678901234 a.n. IsBon Official</option>
        </select>
      </div>

      <div>
        <label for="jumlah_transfer" class="block mb-1 font-medium">Jumlah Transfer</label>
        <input type="number" name="jumlah_transfer" id="jumlah_transfer" class="w-full border-gray-300 rounded px-4 py-2" placeholder="Contoh: 250000" required>
      </div>

      <div>
        <label for="bukti_transfer" class="block mb-1 font-medium">Upload Bukti Transfer</label>
        <input type="file" name="bukti_transfer" id="bukti_transfer" class="w-full border-gray-300 rounded px-4 py-2" accept="image/*" required>
      </div>

      <div class="text-right">
        <button type="submit" class="bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-600 font-semibold">Kirim Konfirmasi</button>
      </div>
    </form>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
