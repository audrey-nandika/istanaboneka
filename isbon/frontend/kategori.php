<?php
// Cek apakah ada parameter 'k' di URL
$kategori_terpilih = isset($_GET['k']) ? $_GET['k'] : null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kategori Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .btn-pink {
      background-color: #ff8ab0;
      color: white;
      border: none;
    }
    .btn-pink:hover {
      background-color: #ff6496;
      color: white;
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  
<!-- Navbar -->
  <?php include 'navbar.php'; ?>

<div class="container my-5">
  <?php if (!$kategori_terpilih): ?>
    <h2 class="text-center mb-4">Semua Kategori Produk</h2>
    <div class="row">
      <?php
      // Dummy kategori
      $kategori = [
        ["id" => "boneka-lucu", "nama" => "Boneka Lucu", "gambar" => "boneka-lucu.jpg"],
        ["id" => "boneka-karakter", "nama" => "Boneka Karakter", "gambar" => "boneka-karakter.jpg"],
        ["id" => "boneka-kecil", "nama" => "Boneka Kecil", "gambar" => "boneka-kecil.jpg"],
        ["id" => "boneka-besar", "nama" => "Boneka Besar", "gambar" => "boneka-lucu.jpg"],
        ["id" => "boneka-custom", "nama" => "Boneka Custom", "gambar" => "boneka-karakter.jpg"]
      ];

      foreach ($kategori as $k) {
        echo '
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/kategori/' . $k['gambar'] . '" class="card-img-top" alt="' . $k['nama'] . '">
            <div class="card-body text-center">
              <h5 class="card-title">' . $k['nama'] . '</h5>
              <a href="kategori.php?k=' . $k['id'] . '" class="btn btn-pink mt-2">Lihat Produk</a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>

  <?php else: ?>
    <h2 class="text-center mb-4">Produk Kategori: <?= ucwords(str_replace("-", " ", $kategori_terpilih)) ?></h2>
    <div class="row">
      <?php
      // Dummy produk dalam kategori
      $produk = [
        ["nama" => "Boneka Panda", "gambar" => "boneka1.jpg", "harga" => 35000],
        ["nama" => "Boneka Kucing", "gambar" => "boneka2.jpg", "harga" => 42000],
        ["nama" => "Boneka Gajah", "gambar" => "boneka3.jpg", "harga" => 39000],
        ["nama" => "Boneka Beruang", "gambar" => "boneka1.jpg", "harga" => 50000],
      ];

      foreach ($produk as $p) {
        echo '
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/produk/' . $p['gambar'] . '" class="card-img-top" alt="' . $p['nama'] . '">
            <div class="card-body text-center">
              <h5 class="card-title">' . $p['nama'] . '</h5>
              <p class="text-muted">Rp ' . number_format($p['harga'], 0, ',', '.') . '</p>
              <a href="produk-detail.php?id=1" class="btn btn-outline-primary">Lihat Detail</a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
    <div class="text-center">
      <a href="kategori.php" class="btn btn-secondary mt-3">← Kembali ke Semua Kategori</a>
    </div>
  <?php endif; ?>
</div>

</body>
</html>
