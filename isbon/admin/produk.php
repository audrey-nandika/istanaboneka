<?php
session_start();
include_once('../config.php');
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$produk = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Produk - Admin</title>
    <link rel="stylesheet" href="../asset/style.css">
</head>
<body>
    <h2>Kelola Produk</h2>
    <a href="dashboard.php">Kembali ke Dashboard</a> |
    <a href="produk_tambah.php">+ Tambah Produk</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php while ($p = mysqli_fetch_assoc($produk)) : ?>
        <tr>
            <td><img src="../asset/gambar/<?= $p['gambar'] ?>" width="80"></td>
            <td><?= $p['nama'] ?></td>
            <td>Rp<?= number_format($p['harga']) ?></td>
            <td><?= $p['stok'] ?></td>
            <td>
                <a href="produk_edit.php?id=<?= $p['id'] ?>">Edit</a> | 
                <a href="produk_hapus.php?id=<?= $p['id'] ?>" onclick="return confirm('Yakin hapus produk ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
