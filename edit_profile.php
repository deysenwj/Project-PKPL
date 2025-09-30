<?php
include("config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: Login/login.php");
    exit;
}

$id = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$id"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);

    $update = "UPDATE users SET nama_lengkap='$nama', no_hp='$no_hp', alamat='$alamat' WHERE id=$id";
    if (mysqli_query($conn, $update)) {
        $msg = "Profil berhasil diperbarui!";
    } else {
        $msg = "Gagal update profil: " . mysqli_error($conn);
    }

    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$id"));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h2>Edit Profile</h2>
    <?php if (isset($msg)) echo "<p style='color:green;'>$msg</p>"; ?>
    <form method="POST">
        <input type="text" name="nama_lengkap" value="<?= htmlspecialchars($user['nama_lengkap']) ?>" placeholder="Nama Lengkap"><br>
        <input type="text" name="no_hp" value="<?= htmlspecialchars($user['no_hp']) ?>" placeholder="No HP"><br>
        <textarea name="alamat" placeholder="Alamat"><?= htmlspecialchars($user['alamat']) ?></textarea><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
