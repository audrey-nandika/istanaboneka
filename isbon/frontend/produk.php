<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Semua Produk Boneka</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Warna pink navbar & tombol */
    .btn-pink, .navbar-custom {
      background-color: #ff8ab0;
      color: white;
    }
    .btn-pink:hover, .navbar-custom:hover {
      background-color: #ff6496;
      color: white;
    }
    /* Navbar link warna putih */
    .navbar-custom .nav-link {
      color: white;
    }
    .navbar-custom .nav-link:hover {
      color: #ffe0ec;
    }
    /* Gambar produk */
    .card img {
      height: 220px;
      object-fit: cover;
    }
    /* Footer style */
    footer {
      background-color: #ff8ab0;
      color: white;
      padding: 15px 0;
      text-align: center;
      margin-top: 40px;
    }
  </style>
</head>
<body>

 <!-- Navbar -->
  <?php include 'navbar.php'; ?>


<!-- Konten Produk -->
<div class="container my-5">
  <h2 class="text-center mb-4">Semua Produk Boneka</h2>
  <div class="row">
    <?php
    // Dummy data produk
    $produk = [
      ["nama" => "Boneka Panda", "gambar" => "boneka1.jpg", "harga" => 35000],
      ["nama" => "Boneka Beruang Pink", "gambar" => "boneka2.jpg", "harga" => 40000],
      ["nama" => "Boneka Hello Kitty", "gambar" => "boneka3.jpg", "harga" => 45000],
      ["nama" => "Boneka Anjing Lucu", "gambar" => "boneka1.jpg", "harga" => 37000],
      ["nama" => "Boneka Domba", "gambar" => "boneka2.jpg", "harga" => 48000],
      ["nama" => "Boneka Karakter Anime", "gambar" => "boneka3.jpg", "harga" => 52000],
    ];

    foreach ($produk as $p) {
      echo '
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="assets/img/produk/' . $p['gambar'] . '" class="card-img-top" alt="' . htmlspecialchars($p['nama']) . '">
          <div class="card-body text-center">
            <h5 class="card-title">' . htmlspecialchars($p['nama']) . '</h5>
            <p class="text-muted">Rp ' . number_format($p['harga'], 0, ',', '.') . '</p>
            <a href="produk-detail.php?id=1" class="btn btn-pink">Lihat Detail</a>
          </div>
        </div>
      </div>';
    }
    ?>
  </div>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
