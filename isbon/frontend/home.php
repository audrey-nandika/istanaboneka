<?php
session_start();
$username = $_SESSION['username'] ?? 'Pengguna';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Istana Boneka (IsBon)</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>



  <!-- Hero -->
  <section class="bg-pink-100">
    <div class="max-w-7xl mx-auto py-12 px-4 text-center">
      <h2 class="text-2xl font-bold text-pink-700"><span>Halo, <?= htmlspecialchars($username) ?></span></h2>
      <h2 class="text-4xl font-bold text-pink-700">Selamat Datang di Istana Boneka!</h2>
      <p class="mt-4 text-lg text-gray-600">Temukan boneka impianmu, dari yang lucu hingga yang menggemaskan 💕</p>
      <a href="produk.php" class="mt-6 inline-block bg-pink-500 text-white px-6 py-3 rounded-full hover:bg-pink-600">Belanja Sekarang</a>
    </div>
  </section>

  <!-- Slider Produk -->
  <section class="w-full py-6">
    <div class="swiper produkSlider w-full">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide relative">
          <img src="../asset/img/produk/produk1.jpg" alt="Produk 1" class="w-full h-[400px] object-cover rounded-xl">
          <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-start p-6 rounded-xl text-white">
            <h2 class="text-2xl font-bold mb-2">Boneka Panda</h2>
            <p class="text-sm">Boneka panda super lucu dan empuk, cocok untuk hadiah atau teman tidur.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide relative">
          <img src="../asset/img/produk/produk2.jpg" alt="Produk 2" class="w-full h-[400px] object-cover rounded-xl">
          <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-start p-6 rounded-xl text-white">
            <h2 class="text-2xl font-bold mb-2">Boneka Beruang Coklat</h2>
            <p class="text-sm">Beruang lucu dengan bahan halus berkualitas tinggi, tersedia berbagai ukuran.</p>
          </div>
        </div>
      </div>

      <div class="swiper-button-next text-white"></div>
      <div class="swiper-button-prev text-white"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- Kategori Produk -->
  <section class="py-10 px-6 bg-gray-50">
    <div class="max-w-7xl mx-auto">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Kategori Produk</h2>
        <a href="kategori.php" class="text-pink-600 hover:underline">Lihat Semua</a>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        <!-- Kategori -->
        <div class="bg-white p-4 rounded shadow hover:shadow-md text-center">
          <img src="../asset/img/kategori/hewan.png" alt="Hewan" class="mx-auto mb-2 h-20 object-contain">
          <h3 class="text-md font-semibold text-gray-700">Boneka Hewan</h3>
        </div>
        <div class="bg-white p-4 rounded shadow hover:shadow-md text-center">
          <img src="../asset/img/kategori/anime.png" alt="Anime" class="mx-auto mb-2 h-20 object-contain">
          <h3 class="text-md font-semibold text-gray-700">Boneka Anime</h3>
        </div>
        <div class="bg-white p-4 rounded shadow hover:shadow-md text-center">
          <img src="../asset/img/kategori/karakter.png" alt="Karakter" class="mx-auto mb-2 h-20 object-contain">
          <h3 class="text-md font-semibold text-gray-700">Karakter Lucu</h3>
        </div>
        <div class="bg-white p-4 rounded shadow hover:shadow-md text-center">
          <img src="../asset/img/kategori/custom.png" alt="Custom" class="mx-auto mb-2 h-20 object-contain">
          <h3 class="text-md font-semibold text-gray-700">Custom Nama</h3>
        </div>
        <div class="bg-white p-4 rounded shadow hover:shadow-md text-center">
          <img src="../asset/img/kategori/hadiah.png" alt="Hadiah" class="mx-auto mb-2 h-20 object-contain">
          <h3 class="text-md font-semibold text-gray-700">Hadiah Spesial</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Produk Terbaru -->
  <section class="py-10 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Produk Terbaru</h2>
        <a href="produk_terbaru.php" class="text-pink-600 hover:underline">Lihat Semua</a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Produk -->
        <div class="bg-gray-50 p-4 rounded shadow hover:shadow-md">
          <img src="../asset/img/produk/produk1.jpg" alt="Produk 1" class="w-full h-48 object-cover rounded">
          <h3 class="mt-3 text-lg font-semibold text-gray-800">Boneka Panda</h3>
          <p class="text-sm text-gray-600">Boneka panda lucu dan lembut, cocok sebagai kado.</p>
          <p class="text-pink-600 font-bold mt-2">Rp 75.000</p>
        </div>

        <div class="bg-gray-50 p-4 rounded shadow hover:shadow-md">
          <img src="../asset/img/produk/produk2.jpg" alt="Produk 2" class="w-full h-48 object-cover rounded">
          <h3 class="mt-3 text-lg font-semibold text-gray-800">Boneka Beruang</h3>
          <p class="text-sm text-gray-600">Beruang coklat manis dengan bahan halus dan berkualitas.</p>
          <p class="text-pink-600 font-bold mt-2">Rp 90.000</p>
        </div>

        <div class="bg-gray-50 p-4 rounded shadow hover:shadow-md">
          <img src="../asset/img/produk/produk3.jpg" alt="Produk 3" class="w-full h-48 object-cover rounded">
          <h3 class="mt-3 text-lg font-semibold text-gray-800">Boneka Kelinci</h3>
          <p class="text-sm text-gray-600">Boneka kelinci imut, teman bermain dan tidur anak-anak.</p>
          <p class="text-pink-600 font-bold mt-2">Rp 65.000</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Produk Terlaris -->
  <section class="py-10 px-6 bg-gray-50">
    <div class="max-w-7xl mx-auto">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Produk Terlaris</h2>
        <a href="produk_terlaris.php" class="text-pink-600 hover:underline">Lihat Semua</a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Produk -->
        <div class="bg-white p-4 rounded shadow hover:shadow-md">
          <img src="../asset/img/produk/produk4.jpg" alt="Produk 4" class="w-full h-48 object-cover rounded">
          <h3 class="mt-3 text-lg font-semibold text-gray-800">Boneka Doraemon</h3>
          <p class="text-sm text-gray-600">Karakter favorit anak-anak yang selalu jadi incaran.</p>
          <p class="text-pink-600 font-bold mt-2">Rp 85.000</p>
        </div>

        <div class="bg-white p-4 rounded shadow hover:shadow-md">
          <img src="../asset/img/produk/produk5.jpg" alt="Produk 5" class="w-full h-48 object-cover rounded">
          <h3 class="mt-3 text-lg font-semibold text-gray-800">Boneka Stitch</h3>
          <p class="text-sm text-gray-600">Boneka lucu dari karakter Disney yang menggemaskan.</p>
          <p class="text-pink-600 font-bold mt-2">Rp 95.000</p>
        </div>

        <div class="bg-white p-4 rounded shadow hover:shadow-md">
          <img src="../asset/img/produk/produk6.jpg" alt="Produk 6" class="w-full h-48 object-cover rounded">
          <h3 class="mt-3 text-lg font-semibold text-gray-800">Boneka BTS</h3>
          <p class="text-sm text-gray-600">Boneka karakter dari grup BTS, favorit para ARMY.</p>
          <p class="text-pink-600 font-bold mt-2">Rp 120.000</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimoni -->
  <section class="py-10 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 custom_heading text-center">Testimoni Pelanggan</h2>

      <div class="relative">
        <div class="swiper testimoniSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-gray-100 p-6 rounded shadow">
              <p class="italic text-gray-700 custom_heading text-center">"Bonekanya lucu dan cepat sampai. Anak saya suka banget!"</p>
              <div class="mt-4 font-semibold text-pink-600 custom_heading text-center">– Rina, Surabaya</div>
            </div>
            <div class="swiper-slide bg-gray-100 p-6 rounded shadow">
              <p class="italic text-gray-700 custom_heading text-center">"Pengiriman cepat, kualitas boneka bagus banget."</p>
              <div class="mt-4 font-semibold text-pink-600 custom_heading text-center">– Andi, Jakarta</div>
            </div>
          </div>
          <div class="swiper-pagination mt-4"></div>
        </div>
        <div class="swiper-button-next z-10 text-pink-600"></div>
        <div class="swiper-button-prev z-10 text-pink-600"></div>
      </div>
    </div>
  </section>

  <!-- Footer -->
<?php include 'footer.php'; ?>


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const produkSlider = new Swiper(".produkSlider", {
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    });

    const testimoniSwiper = new Swiper(".testimoniSwiper", {
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });
  </script>
</body>
</html>
