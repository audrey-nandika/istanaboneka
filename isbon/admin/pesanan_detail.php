<?php
session_start();
include_once('../config.php');
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$pesanan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pesanan WHERE id=$id"));

$detail = mysqli_query($conn, "
    SELECT p.nama, p.harga, dp.jumlah, dp.subtotal 
    FROM detail_pesanan dp
    JOIN produk p ON dp.produk_id = p.id
    WHERE dp.pesanan_id = $id
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Pesanan</title>
</head>
<body>
    <h2>Detail Pesanan - <?= $pesanan['kode_pesanan'] ?></h2>
    <p><strong>User ID:</strong> <?= $pesanan['user_id'] ?></p>
    <p><strong>Alamat Kirim:</strong> <?= $pesanan['alamat_kirim'] ?></p>
    <p><strong>Pembayaran:</strong> <?= $pesanan['metode_pembayaran'] ?></p>
    <p><strong>Status:</strong> <?= $pesanan['status'] ?></p>
    <p><strong>Tanggal:</strong> <?= $pesanan['tanggal_pesanan'] ?></p>
    <p><strong>Total:</strong> Rp<?= number_format($pesanan['total']) ?></p>

    <h3>Produk Dipesan:</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
        <?php while ($d = mysqli_fetch_assoc($detail)) : ?>
        <tr>
            <td><?= $d['nama'] ?></td>
            <td>Rp<?= number_format($d['harga']) ?></td>
            <td><?= $d['jumlah'] ?></td>
            <td>Rp<?= number_format($d['subtotal']) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <br><a href="pesanan.php">← Kembali ke Daftar Pesanan</a>
</body>
</html>
