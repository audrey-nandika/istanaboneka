<?php
session_start();
include_once('../config.php');
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id=$id"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    if ($_FILES['gambar']['name'] != '') {
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "../asset/gambar/" . $gambar);
        mysqli_query($conn, "UPDATE produk SET nama='$nama', harga='$harga', deskripsi='$deskripsi', gambar='$gambar', stok='$stok' WHERE id=$id");
    } else {
        mysqli_query($conn, "UPDATE produk SET nama='$nama', harga='$harga', deskripsi='$deskripsi', stok='$stok' WHERE id=$id");
    }

    header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form method="post" enctype="multipart/form-data">
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>" required><br>
        Deskripsi: <textarea name="deskripsi"><?= $data['deskripsi'] ?></textarea><br>
        Gambar Saat Ini: <img src="../asset/gambar/<?= $data['gambar'] ?>" width="100"><br>
        Ganti Gambar: <input type="file" name="gambar"><br>
        Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
