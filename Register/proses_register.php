<?php
include("../config.php");

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$pass = $_POST['password'];
$confirm = $_POST['confirm_password'];

if ($pass !== $confirm) {
    header("Location: register.php?error=" . urlencode("Password tidak sama!"));
    exit;
}

$cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR email='$email'");
if (mysqli_num_rows($cek) > 0) {
    header("Location: register.php?error=" . urlencode("Username atau Email sudah terdaftar!"));
    exit;
}

$hashed = password_hash($pass, PASSWORD_DEFAULT);
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed')";
if (mysqli_query($conn, $query)) {
    header("Location: register.php?success=" . urlencode("Register berhasil! Silakan login."));
} else {
    header("Location: register.php?error=" . urlencode("Terjadi kesalahan: " . mysqli_error($conn)));
}
?>
