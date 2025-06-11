<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Produk - Boneka Panda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .btn-pink {
      background-color: #ff8ab0;
      color: white;
      border: none;
    }
    .btn-pink:hover {
      background-color: #ff6496;
    }
    .btn-outline-pink {
      color: #ff8ab0;
      border: 1px solid #ff8ab0;
    }
    .btn-outline-pink:hover {
      background-color: #ff8ab0;
      color: white;
    }
    .product-image {
      width: 100%;
      height: auto;
      max-height: 450px;
      object-fit: cover;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<div class="container my-5">
  <div class="row">
    <!-- Gambar Produk -->
    <div class="col-md-6">
      <img src="assets/img/produk/boneka1.jpg" class="product-image shadow-sm" alt="Boneka Panda">
    </div>

    <!-- Detail Produk -->
    <div class="col-md-6">
      <h2 class="mb-3">Boneka Panda</h2>
      <h4 class="text-danger mb-3">Rp 35.000</h4>
      <p><strong>Deskripsi:</strong></p>
      <p>Boneka panda lucu dengan bulu halus dan lembut. Cocok untuk hadiah ulang tahun, kado spesial, atau teman tidur anak-anak.</p>

      <p><strong>Ukuran:</strong> 30cm</p>
      <p><strong>Bahan:</strong> Kain velboa & dakron</p>

      <!-- Tombol Aksi -->
      <div class="d-flex gap-3 mt-4">
        <a href="#" class="btn btn-pink btn-lg">Beli Sekarang</a>

        <?php if (isset($_SESSION['user_id'])): ?>
          <form action="../api/tambah_keranjang.php" method="POST">
            <input type="hidden" name="produk_id" value="1"> <!-- Ganti sesuai produk -->
            <input type="hidden" name="jumlah" value="1">
            <button type="submit" class="btn btn-outline-pink btn-lg">Tambah ke Keranjang</button>
          </form>
        <?php else: ?>
          <a href="login.php" class="btn btn-outline-pink btn-lg">Login untuk Tambah</a>
        <?php endif; ?>
      </div>

      <div class="mt-3">
        <a href="produk.php" class="btn btn-link text-decoration-none">← Kembali ke Produk</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
