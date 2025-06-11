<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lupa Password - Istana Boneka</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-gray-800">

  <div class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-10 max-w-md w-full">
      <h2 class="text-2xl font-bold text-center text-pink-600 mb-6">Lupa Password</h2>
      <p class="text-sm text-center text-gray-600 mb-4">
        Masukkan email atau nomor telepon yang terdaftar untuk mereset password Anda.
      </p>
      <form action="proses_lupa_password.php" method="POST" class="space-y-5">
        <div>
          <label class="block mb-1 font-semibold">Email</label>
          <input
            type="email"
            name="email"
            placeholder="contoh@email.com"
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <div class="text-center font-semibold text-gray-500">ATAU</div>
        <div>
          <label class="block mb-1 font-semibold">Nomor Telepon</label>
          <input
            type="tel"
            name="telepon"
            placeholder="08xxxxxxxxxx"
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
          />
        </div>
        <button
          type="submit"
          class="w-full bg-pink-500 text-white py-3 rounded hover:bg-pink-600 font-semibold"
        >
          Kirim Permintaan Reset
        </button>
        <p class="text-center text-sm mt-4">
          Sudah ingat password?
          <a href="login.php" class="text-pink-500 hover:underline">Login sekarang</a>
        </p>
      </form>
    </div>
  </div>

</body>
</html>
