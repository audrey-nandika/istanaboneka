<?php
session_start();
include '../config.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$user_id = $_SESSION['user_id'];
$keranjang = mysqli_query($conn, "SELECT k.*, nama_produk AS nama_produk, p.harga FROM keranjang k JOIN produk p ON k.produk_id = p.id WHERE k.user_id = $user_id");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Keranjang - Istana Boneka (IsBon)</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <?php include 'navbar.php'; ?>

  <main class="max-w-7xl mx-auto p-6">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Keranjang Belanja</h2>

    <form action="checkout.php" method="POST">
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
          <thead class="bg-pink-100 text-pink-700">
            <tr>
              <th class="py-3 px-6 text-left"><input type="checkbox" id="selectAll" class="mr-2">Produk</th>
              <th class="py-3 px-6 text-center">Harga</th>
              <th class="py-3 px-6 text-center">Jumlah</th>
              <th class="py-3 px-6 text-center">Subtotal</th>
              <th class="py-3 px-6 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <?php
            $total = 0;
            while ($row = mysqli_fetch_assoc($keranjang)):
              $subtotal = $row['harga'] * $row['jumlah'];
              $total += $subtotal;
            ?>
            <tr class="border-b">
              <td class="py-4 px-6 flex items-center">
                <input type="checkbox" class="itemCheckbox mr-2" name="produk_terpilih[]" value="<?= $row['produk_id'] ?>" data-subtotal="<?= $subtotal ?>">
                <?= htmlspecialchars($row['nama_produk']) ?>

                <!-- Kirim data tersembunyi agar bisa digunakan saat checkout -->
                <input type="hidden" name="keranjang_id[<?= $row['produk_id'] ?>]" value="<?= $row['id'] ?>">
                <input type="hidden" name="jumlah[<?= $row['produk_id'] ?>]" value="<?= $row['jumlah'] ?>">
              </td>
              <td class="py-4 px-6 text-center">Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
              <td class="py-4 px-6 text-center"><?= $row['jumlah'] ?></td>
              <td class="py-4 px-6 text-center font-semibold">Rp <?= number_format($subtotal, 0, ',', '.') ?></td>
              <td class="py-4 px-6 text-center">
                <form action="api/hapus_keranjang.php" method="POST">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <button class="text-pink-600 hover:text-pink-800 text-sm" type="submit" onclick="return confirm('Yakin ingin menghapus item ini?')">Hapus</button>
                </form>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>

      <div class="mt-6 text-right">
        <p class="text-lg font-semibold mb-3">Total Harga: <span id="totalHarga" class="text-pink-600">Rp 0</span></p>
        <button type="submit" class="inline-block bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-600 font-semibold">
          Checkout Produk Terpilih
        </button>
      </div>
    </form>
  </main>

  <?php include 'footer.php'; ?>

  <script>
    const selectAll = document.getElementById('selectAll');
    const itemCheckboxes = document.querySelectorAll('.itemCheckbox');
    const totalHargaEl = document.getElementById('totalHarga');

    function formatRupiah(angka) {
      return "Rp " + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function hitungTotal() {
      let total = 0;
      itemCheckboxes.forEach(cb => {
        if (cb.checked) {
          total += parseInt(cb.getAttribute('data-subtotal'));
        }
      });
      totalHargaEl.textContent = formatRupiah(total);
    }

    selectAll.addEventListener('change', function () {
      itemCheckboxes.forEach(cb => cb.checked = this.checked);
      hitungTotal();
    });

    itemCheckboxes.forEach(cb => {
      cb.addEventListener('change', function () {
        selectAll.checked = [...itemCheckboxes].every(c => c.checked);
        hitungTotal();
      });
    });

    hitungTotal();
  </script>
</body>
</html>
