<?php
$host = "localhost";
$user = "root";        // sesuaikan
$pass = "";            // sesuaikan
$db   = "toko_emas";   // sesuaikan

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

session_start();
?>
