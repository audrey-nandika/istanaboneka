<?php
session_start();
session_unset(); // menghapus semua variabel session
session_destroy(); // mengakhiri session

header("Location: ../frontend/login.php"); // sesuaikan jika login.php di folder lain
exit;
?>
