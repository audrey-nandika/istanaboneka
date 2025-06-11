<?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'login_dulu') : ?>
  <div class="bg-red-100 text-red-700 p-2 rounded mb-4 text-center">
    Anda harus login terlebih dahulu untuk menambahkan ke keranjang.
  </div>
<?php endif; ?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Istana Boneka</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-gray-800">

  <div class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-10 max-w-md w-full">
      <h2 class="text-3xl font-bold text-center text-pink-600 mb-6">Masuk ke Akun Anda</h2>
      <form action="../api/proses_login.php" method="POST" class="space-y-5">
        <div>
          <label class="block mb-1 font-semibold">Email / Username</label>
          <input
            type="text"
            name="identitas"
            placeholder="Email atau Username"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <div>
          <label class="block mb-1 font-semibold">Password</label>
          <input
            type="password"
            name="password"
            placeholder="Password"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
          <div class="text-right mt-2">
            <a href="lupa_password.php" class="text-sm text-pink-500 hover:underline">Lupa Password?</a>
          </div>
        </div>
        <button
          type="submit"
          class="w-full bg-pink-500 text-white py-3 rounded hover:bg-pink-600 font-semibold"
        >
          Login
        </button>
        <p class="text-center text-sm mt-4">
          Belum punya akun?
          <a href="register.php" class="text-pink-500 hover:underline">Daftar di sini</a>
        </p>
      </form>
    </div>
  </div>

</body>
</html>
