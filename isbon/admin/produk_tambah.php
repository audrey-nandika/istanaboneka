<?php
session_start();
include_once('../config.php');
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "../asset/gambar/" . $gambar);

    mysqli_query($conn, "INSERT INTO produk (nama, harga, deskripsi, gambar, stok) VALUES ('$nama', '$harga', '$deskripsi', '$gambar', '$stok')");
    header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk Baru</h2>
    <form method="post" enctype="multipart/form-data">
        Nama: <input type="text" name="nama" required><br>
        Harga: <input type="number" name="harga" required><br>
        Deskripsi: <textarea name="deskripsi"></textarea><br>
        Gambar: <input type="file" name="gambar" required><br>
        Stok: <input type="number" name="stok" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
