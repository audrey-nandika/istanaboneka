<?php
session_start();
include_once('../config.php');
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$pesanan = mysqli_query($conn, "SELECT * FROM pesanan ORDER BY tanggal_pesanan DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Pesanan</title>
</head>
<body>
    <h2>Daftar Pesanan</h2>
    <a href="dashboard.php">← Kembali ke Dashboard</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Kode</th>
            <th>User ID</th>
            <th>Total</th>
            <th>Pembayaran</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php while ($p = mysqli_fetch_assoc($pesanan)) : ?>
        <tr>
            <td><?= $p['kode_pesanan'] ?></td>
            <td><?= $p['user_id'] ?></td>
            <td>Rp<?= number_format($p['total']) ?></td>
            <td><?= $p['metode_pembayaran'] ?></td>
            <td>
                <form method="post" action="pesanan_status.php">
                    <input type="hidden" name="id" value="<?= $p['id'] ?>">
                    <select name="status" onchange="this.form.submit()">
                        <?php
                        $opsi = ['Menunggu', 'Diproses', 'Dikirim', 'Selesai', 'Dibatalkan'];
                        foreach ($opsi as $s) {
                            echo "<option value='$s'" . ($p['status'] == $s ? ' selected' : '') . ">$s</option>";
                        }
                        ?>
                    </select>
                </form>
            </td>
            <td><?= $p['tanggal_pesanan'] ?></td>
            <td><a href="pesanan_detail.php?id=<?= $p['id'] ?>">Detail</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
