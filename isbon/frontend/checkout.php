<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produk_terpilih'])) {
  $_SESSION['produk_checkout'] = $_POST['produk_terpilih'];
}

if (!isset($_SESSION['produk_checkout']) || count($_SESSION['produk_checkout']) === 0) {
  echo "<script>alert('Tidak ada produk yang dipilih!'); window.location='keranjang.php';</script>";
  exit;
}

$user_result = mysqli_query($conn, "SELECT nama_lengkap, no_telepon FROM users WHERE id = $user_id");
$user_data = mysqli_fetch_assoc($user_result);

$produk_terpilih = $_SESSION['produk_checkout'];
$produk_data = [];
$total = 0;

foreach ($produk_terpilih as $produk_id) {
  $query = mysqli_query($conn, "SELECT k.*, p.nama_produk, p.harga FROM keranjang k 
                                JOIN produk p ON k.produk_id = p.id 
                                WHERE k.user_id = $user_id AND k.produk_id = $produk_id");
  if ($row = mysqli_fetch_assoc($query)) {
    $subtotal = $row['jumlah'] * $row['harga'];
    $total += $subtotal;
    $produk_data[] = [
      'nama_produk' => $row['nama_produk'],
      'jumlah' => $row['jumlah'],
      'subtotal' => $subtotal
    ];
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Checkout - Istana Boneka (IsBon)</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten -->
  <main class="max-w-5xl mx-auto py-10 px-6">
    <h2 class="text-3xl font-bold mb-8 text-gray-800">Checkout</h2>

    <!-- Informasi Produk -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold mb-4">Produk yang akan dibeli</h3>
      <div class="bg-white rounded shadow">
        <table class="w-full text-left">
          <thead class="bg-pink-100 text-pink-700">
            <tr>
              <th class="py-3 px-6">Produk</th>
              <th class="py-3 px-6 text-center">Jumlah</th>
              <th class="py-3 px-6 text-right">Subtotal</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <?php foreach ($produk_data as $item): ?>
              <tr class="border-b">
                <td class="py-4 px-6"><?= htmlspecialchars($item['nama_produk']) ?></td>
                <td class="py-4 px-6 text-center"><?= $item['jumlah'] ?></td>
                <td class="py-4 px-6 text-right">Rp <?= number_format($item['subtotal'], 0, ',', '.') ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Formulir Informasi Pembeli -->
    <form method="POST" class="space-y-6" id="checkoutForm">
      <input type="hidden" name="checkout_final" value="1">
      <div class="mb-8">
        <h3 class="text-xl font-semibold mb-4">Informasi Pembeli</h3>
        <div class="bg-white rounded shadow p-6 space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" value="<?= htmlspecialchars($user_data['nama_lengkap']) ?>" readonly class="mt-1 block w-full border border-gray-300 rounded px-4 py-2 bg-gray-100 cursor-not-allowed" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
            <input type="text" value="<?= htmlspecialchars($user_data['no_telepon']) ?>" readonly class="mt-1 block w-full border border-gray-300 rounded px-4 py-2 bg-gray-100 cursor-not-allowed" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Alamat Pengiriman</label>
            <textarea name="alamat_kirim" required class="mt-1 block w-full border border-gray-300 rounded px-4 py-2" rows="3"></textarea>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
            <select name="metode_pembayaran" required class="mt-1 block w-full border border-gray-300 rounded px-4 py-2">
              <option value="">-- Pilih Metode --</option>
              <option value="COD">Bayar di Tempat (COD)</option>
              <option value="Transfer Bank">Transfer Bank</option>
              <option value="E-Wallet">E-Wallet</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Ringkasan & Konfirmasi -->
      <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
          <span class="text-lg font-semibold">Total Harga:</span>
          <span class="text-xl font-bold text-pink-600">Rp <?= number_format($total, 0, ',', '.') ?></span>
        </div>
        <div class="text-right">
          <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded font-semibold">
            Konfirmasi Checkout
          </button>
        </div>
      </div>
    </form>
  </main>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

</body>
</html>
