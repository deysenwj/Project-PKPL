<?php
include 'db.php'; // koneksi database

$id = $name = $weight = $type = $quantity = $price = $rating = $category = $image = "";

// jika edit
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
    $product = mysqli_fetch_assoc($result);

    $id = $product['id'];
    $name = $product['name'];
    $weight = $product['weight'];
    $type = $product['type'];
    $quantity = $product['quantity'];
    $price = $product['price'];
    $rating = $product['rating'];
    $category = $product['category'];
    $image = $product['image'];
}

// tambah produk
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $price = str_replace('.', '', $_POST['price']);
    $rating = $_POST['rating'];
    $category = $_POST['category'];

    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $sql = "INSERT INTO products (name, weight, type, quantity, price, rating, category, image) 
            VALUES ('$name','$weight','$type',$quantity,'$price',$rating,'$category','$image')";
    mysqli_query($conn, $sql);
    header("Location: admin.php?success=Produk berhasil ditambahkan");
    exit;
}

// update produk
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $price = str_replace('.', '', $_POST['price']);
    $rating = $_POST['rating'];
    $category = $_POST['category'];

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $sql = "UPDATE products SET name='$name', weight='$weight', type='$type', quantity=$quantity, price='$price', rating=$rating, category='$category', image='$image' WHERE id=$id";
    } else {
        $sql = "UPDATE products SET name='$name', weight='$weight', type='$type', quantity=$quantity, price='$price', rating=$rating, category='$category' WHERE id=$id";
    }

    mysqli_query($conn, $sql);
    header("Location: admin.php?success=Produk berhasil diperbarui");
    exit;
}

// hapus produk
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE id=$id");
    header("Location: admin.php?success=Produk berhasil dihapus");
    exit;
}

// ambil data
$result = mysqli_query($conn, "SELECT * FROM products");
$totalProduk = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Toko Emas Mekar</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {box-sizing: border-box;}
        body {font-family: 'Inter', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 20px; margin: 0;}
        .dashboard-container {max-width: 1400px; margin: 0 auto;}
        .header {background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center;}
        .header h1 {color: #2d3748; font-size: 28px; font-weight: 700; margin: 0;}
        .header-stats {display: flex; gap: 20px;}
        .stat-card {background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px 25px; border-radius: 12px; text-align: center;}
        .stat-number {font-size: 24px; font-weight: 700;}
        .stat-label {font-size: 12px; margin-top: 5px;}
        .content-grid {display: grid; grid-template-columns: 1fr 2fr; gap: 30px;}
        .form-card, .table-card {background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);}
        .form-card h2, .table-card h2 {margin-top: 0; margin-bottom: 20px; color: #2d3748; font-size: 20px;}
        .form-group {margin-bottom: 20px; display: flex; flex-direction: column;}
        .form-group label {font-weight: 600; color: #4a5568; margin-bottom: 8px; display: block; font-size: 14px;}
        .form-group input, .form-group select {width: 100%; padding: 12px; border: 2px solid #e2e8f0; border-radius: 8px; font-family: 'Inter', sans-serif; font-size: 14px; transition: all 0.3s;}
        .form-group input:focus, .form-group select:focus {outline: none; border-color: #667eea; box-shadow: 0 0 0 3px rgba(102,126,234,0.1);}
        .form-group input[type="file"] {padding: 10px;}
        .form-group p {margin: 10px 0 0 0;}
        .btn-group {display: flex; gap: 10px; margin-top: 25px;}
        .btn {padding: 12px 18px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 14px; transition: all 0.3s; text-decoration: none; display: inline-block;}
        .btn-primary {background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;}
        .btn-primary:hover {transform: translateY(-2px); box-shadow: 0 5px 15px rgba(102,126,234,0.4);}
        .btn-danger {background: #ef4444; color: white;}
        .btn-danger:hover {background: #dc2626;}
        table {width: 100%; border-collapse: collapse; margin-top: 20px;}
        th, td {padding: 12px 10px; border-bottom: 1px solid #e2e8f0; text-align: left;}
        th {background: #f7fafc; color: #4a5568; text-transform: uppercase; font-size: 13px; font-weight: 600;}
        .btn-edit, .btn-delete {padding: 6px 10px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600; display: inline-block; margin-right: 5px;}
        .btn-edit {background: #dbeafe; color: #1e40af;}
        .btn-edit:hover {background: #bfdbfe;}
        .btn-delete {background: #fee2e2; color: #b91c1c;}
        .btn-delete:hover {background: #fecaca;}
        img {border-radius: 8px; display: block;}
        @media(max-width:1200px){.content-grid{grid-template-columns:1fr}}
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="header">
            <h1><i class="fas fa-gem"></i> Admin - Toko Emas Mekar</h1>
            <div class="header-stats">
                <div class="stat-card">
                    <div class="stat-number"><?= $totalProduk ?></div>
                    <div class="stat-label">Total Produk</div>
                </div>
            </div>
        </div>

        <?php if (isset($_GET['success'])): ?>
            <script>alert("✅ <?= $_GET['success']; ?>");</script>
        <?php endif; ?>

        <div class="content-grid">
            <div class="form-card">
                <h2><i class="fas fa-box"></i> <?= $id ? 'Edit Produk' : 'Tambah Produk' ?></h2>
                <form method="POST" action="admin.php" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $id ?>">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="name" value="<?= $name ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Berat Produk</label>
                        <input type="text" name="weight" value="<?= $weight ?>">
                    </div>

                    <div class="form-group">
                        <label>Tipe Produk</label>
                        <select name="type" required>
                            <option value="">-- Pilih Tipe --</option>
                            <?php
                            $types = ['Emas', 'Perak'];
                            foreach ($types as $t) {
                                $selected = ($t == $type) ? 'selected' : '';
                                echo "<option value='$t' $selected>$t</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Stok</label>
                        <input type="number" name="quantity" value="<?= $quantity ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Harga (Rp)</label>
                        <input type="text" name="price" id="price" value="<?= number_format((int) str_replace('.', '', $price), 0, ',', '.') ?>" oninput="formatPrice(this)" required>
                    </div>

                    <div class="form-group">
                        <label>Rating</label>
                        <select name="rating" required>
                            <option value="">-- Pilih Rating --</option>
                            <?php
                            for ($r = 1; $r <= 5; $r++) {
                                $sel = ($rating == $r) ? 'selected' : '';
                                echo "<option value='$r' $sel>$r ⭐</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="category" required>
                            <option value="">-- Pilih Kategori --</option>
                            <?php
                            $categories = ['Cincin', 'Gelang', 'Kalung', 'Anting', 'Lainnya'];
                            foreach ($categories as $c) {
                                $selected = ($c == $category) ? 'selected' : '';
                                echo "<option value='$c' $selected>$c</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="file" name="image" accept="image/*">
                        <?php if ($image): ?>
                            <p><img src="uploads/<?= $image ?>" width="80"></p>
                        <?php endif; ?>
                    </div>

                    <div class="btn-group">
                        <button type="submit" name="<?= $id ? 'update' : 'create' ?>" class="btn btn-primary">
                            <i class="fas fa-save"></i> <?= $id ? 'Update Produk' : 'Tambah Produk' ?>
                        </button>
                        <a href="admin.php" class="btn btn-danger"><i class="fas fa-times"></i> Batal</a>
                    </div>
                </form>
            </div>

            <div class="table-card">
                <h2><i class="fas fa-list"></i> Daftar Produk</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Tipe</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Rating</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= htmlspecialchars($row['name']) ?></td>
                                <td><?= htmlspecialchars($row['type']) ?></td>
                                <td><?= htmlspecialchars($row['category']) ?></td>
                                <td>Rp <?= number_format((int) str_replace('.', '', $row['price']), 0, ',', '.') ?></td>
                                <td><?= $row['quantity'] ?> pcs</td>
                                <td><?= number_format($row['rating'], 1) ?></td>
                                <td><img src="uploads/<?= $row['image'] ?>" width="60" alt="<?= $row['name'] ?>"></td>
                                <td>
                                    <a href="admin.php?edit=<?= $row['id'] ?>" class="btn-edit"><i class="fas fa-edit"></i></a>
                                    <a href="admin.php?delete=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus produk ini?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function formatPrice(input) {
            let value = input.value.replace(/[^0-9]/g, '');
            input.value = new Intl.NumberFormat('id-ID').format(value);
        }
    </script>
</body>
</html>