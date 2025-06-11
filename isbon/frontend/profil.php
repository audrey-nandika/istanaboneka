<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil Akun - Istana Boneka</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>
    <div class="flex items-center space-x-4">
      <!-- Icon Profil -->
      <a href="profil.php" class="block w-8 h-8 rounded-full overflow-hidden border-2 border-pink-500 hover:border-pink-700">
        <img src="default-profile.png" alt="Profil" class="w-full h-full object-cover" />
      </a>
      <!-- Tombol Logout -->
      <a href="logout.php" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 font-semibold">
        Logout
      </a>
    </div>
  </div>
</header>


  <!-- Konten Profil -->
  <main class="max-w-4xl mx-auto p-6 bg-white rounded shadow mt-10">
    <h2 class="text-3xl font-bold mb-6 text-pink-600">Profil Saya</h2>

    <div class="flex flex-col md:flex-row md:space-x-8">
      <!-- Foto Profil -->
      <div class="mb-6 md:mb-0 flex justify-center md:justify-start">
        <img src="default-profile.png" alt="Foto Profil" class="w-40 h-40 rounded-full object-cover border-4 border-pink-300" />
      </div>

      <!-- Info Profil -->
      <div class="flex-1">
        <div class="mb-4">
          <h3 class="text-lg font-semibold text-gray-600">Nama Lengkap</h3>
          <p class="text-gray-800">Siti Nurhaliza</p>
        </div>
        <div class="mb-4">
          <h3 class="text-lg font-semibold text-gray-600">Email</h3>
          <p class="text-gray-800">sitinur@example.com</p>
        </div>
        <div class="mb-4">
          <h3 class="text-lg font-semibold text-gray-600">Nomor Telepon</h3>
          <p class="text-gray-800">0812-3456-7890</p>
        </div>
        <div class="mb-6">
          <h3 class="text-lg font-semibold text-gray-600">Alamat</h3>
          <p class="text-gray-800">Jl. Melati No.10, Jakarta Selatan</p>
        </div>

        <!-- Tombol aksi -->
        <div class="flex space-x-4">
          <a href="edit_profil.php" class="bg-pink-500 text-white px-6 py-3 rounded hover:bg-pink-600 font-semibold transition">
            Edit Profil
          </a>
          <a href="logout.php" class="bg-gray-300 text-gray-700 px-6 py-3 rounded hover:bg-gray-400 font-semibold transition">
            Logout
          </a>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
<?php include 'footer.php'; ?>


</body>
</html>
