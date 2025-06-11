<?php
session_start();
include '../config.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$user_id = $_SESSION['user_id'];
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$metode_pembayaran = mysqli_real_escape_string($conn, $_POST['metode_pembayaran']);
$produk_terpilih = isset($_POST['produk_terpilih']) ? $_POST['produk_terpilih'] : [];

if (empty($produk_terpilih) || empty($alamat) || empty($metode_pembayaran)) {
  echo "<script>alert('Data tidak lengkap!'); window.history.back();</script>";
  exit;
}

// Ambil info user (nama & telepon)
$user_query = mysqli_query($conn, "SELECT nama_lengkap, telepon FROM users WHERE id = $user_id");
if (!$user_query || mysqli_num_rows($user_query) == 0) {
  echo "<script>alert('Pengguna tidak ditemukan.'); window.location.href = 'login.php';</script>";
  exit;
}
$user_data = mysqli_fetch_assoc($user_query);
$nama = $user_data['nama_lengkap'];
$telepon = $user_data['telepon'];

// Ambil data produk dari keranjang
$produk_ids = implode(',', array_map('intval', $produk_terpilih));
$query = mysqli_query($conn, "SELECT k.*, p.harga FROM keranjang k 
JOIN produk p ON k.produk_id = p.id 
WHERE k.user_id = $user_id AND k.produk_id IN ($produk_ids)");

$produk_checkout = [];
$total_harga = 0;
while ($row = mysqli_fetch_assoc($query)) {
  $row['subtotal'] = $row['harga'] * $row['jumlah'];
  $total_harga += $row['subtotal'];
  $produk_checkout[] = $row;
}

// Simpan ke tabel pesanan
$tanggal = date('Y-m-d H:i:s');
$status = 'pending';

$insert_pesanan = mysqli_query($conn, "INSERT INTO pesanan (user_id, nama, telepon, alamat, metode_pembayaran, total_harga, tanggal, status)
VALUES ('$user_id', '$nama', '$telepon', '$alamat', '$metode_pembayaran', '$total_harga', '$tanggal', '$status')");

if ($insert_pesanan) {
  $pesanan_id = mysqli_insert_id($conn);

  foreach ($produk_checkout as $produk) {
    $produk_id = $produk['produk_id'];
    $jumlah = $produk['jumlah'];
    $subtotal = $produk['subtotal'];

    mysqli_query($conn, "INSERT INTO detail_pesanan (pesanan_id, produk_id, jumlah, subtotal) 
    VALUES ('$pesanan_id', '$produk_id', '$jumlah', '$subtotal')");
  }

  // Hapus dari keranjang
  mysqli_query($conn, "DELETE FROM keranjang WHERE user_id = $user_id AND produk_id IN ($produk_ids)");

  // Setelah selesai menyimpan pesanan dan detailnya
  header("Location: checkout_success.php");
  exit;
}

?>
