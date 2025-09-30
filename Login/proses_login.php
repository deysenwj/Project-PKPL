<?php
include("../config.php");

$username = trim($_POST['username']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' OR email='$username' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header("Location: ../index.html");
        exit;
    } else {
        header("Location: login.php?error=" . urlencode("Password salah!"));
        exit;
    }
} else {
    header("Location: login.php?error=" . urlencode("User tidak ditemukan!"));
    exit;
}
?>
