<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kontak Kami - Istana Boneka (IsBon)</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

   <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten Utama -->
  <main class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-4xl font-bold text-center text-pink-600 mb-10">Hubungi Kami</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Form Kontak -->
      <form class="space-y-6">
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Nama</label>
          <input type="text" placeholder="Nama Anda" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400" />
        </div>
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Email</label>
          <input type="email" placeholder="Email Anda" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400" />
        </div>
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Pesan</label>
          <textarea rows="5" placeholder="Tulis pesan Anda..." class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"></textarea>
        </div>
        <button type="submit" class="bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-600 font-semibold">
          Kirim Pesan
        </button>
      </form>

      <!-- Info Kontak -->
      <div class="space-y-6 text-gray-700">
        <div>
          <h3 class="text-2xl font-semibold text-pink-600 mb-2">Alamat</h3>
          <p>Jl. Boneka Ceria No. 12, Jakarta Selatan, Indonesia</p>
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-pink-600 mb-2">Telepon</h3>
          <p>+62 812-3456-7890</p>
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-pink-600 mb-2">Email</h3>
          <p>cs@istanaboneka.id</p>
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-pink-600 mb-2">Jam Operasional</h3>
          <p>Senin - Jumat: 09.00 - 17.00 WIB</p>
          <p>Sabtu & Minggu: Libur</p>
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-pink-600 mb-2">Media Sosial</h3>
          <p>Instagram: <a href="https://instagram.com/istanaboneka.id" class="text-pink-500 hover:underline">@istanaboneka.id</a></p>
        </div>
      </div>
    </div>

    <!-- Peta Lokasi -->
    <div class="mt-16">
      <h3 class="text-2xl font-bold text-pink-600 mb-4">Lokasi Kami</h3>
      <div class="w-full h-96 rounded overflow-hidden shadow">
        <iframe
          class="w-full h-full border-0"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.264256898314!2d106.8229!3d-6.2245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f157839d0b47%3A0x123456789abcdef0!2sJl.%20Boneka%20Ceria%20No.%2012%2C%20Jakarta%20Selatan!5e0!3m2!1sid!2sid!4v1710000000000"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
