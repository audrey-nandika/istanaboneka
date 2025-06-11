<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registrasi - Istana Boneka</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-gray-800">

  <div class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-10 max-w-md w-full">
      <h2 class="text-3xl font-bold text-center text-pink-600 mb-6">Buat Akun Baru</h2>
      <form action="../api/proses_register.php" method="POST" class="space-y-5" onsubmit="return validatePasswords()">
        <div>
          <label class="block mb-1 font-semibold">Nama Lengkap</label>
          <input
            type="text"
            name="nama_lengkap"
            placeholder="Nama Lengkap Anda"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <div>
          <label class="block mb-1 font-semibold">Username</label>
          <input
            type="text"
            name="username"
            placeholder="Username Anda"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <div>
          <label class="block mb-1 font-semibold">Email</label>
          <input
            type="email"
            name="email"
            placeholder="Email Anda"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <div>
          <label class="block mb-1 font-semibold">Nomor Telepon</label>
          <input
            type="tel"
            name="telepon"
            placeholder="081234567890"
            pattern="[0-9]{9,15}"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <div>
          <label class="block mb-1 font-semibold">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <div>
          <label class="block mb-1 font-semibold">Konfirmasi Password</label>
          <input
            type="password"
            id="confirm_password"
            name="confirm_password"
            placeholder="Konfirmasi Password"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <button
          type="submit"
          class="w-full bg-pink-500 text-white py-3 rounded hover:bg-pink-600 font-semibold"
        >
          Daftar
        </button>
        <p class="text-center text-sm mt-4">
          Sudah punya akun?
          <a href="login.php" class="text-pink-500 hover:underline">Login di sini</a>
        </p>
      </form>
    </div>
  </div>

  <script>
    function validatePasswords() {
      const password = document.getElementById('password').value;
      const confirm = document.getElementById('confirm_password').value;
      if (password !== confirm) {
        alert('Password dan konfirmasi password tidak cocok!');
        return false; // mencegah submit form
      }
      return true;
    }
  </script>

</body>
</html>
