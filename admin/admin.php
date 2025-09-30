<?php
include 'db.php'; // Koneksi database

// Inisialisasi variabel form kosong
$id = $name = $weight = $type = $quantity = $price = $rating = $category = $image = "";

// Jika ada parameter 'edit', ambil data produk berdasarkan ID
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
    $product = mysqli_fetch_assoc($result);

    // Isi variabel dengan data lama
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

// Proses Tambah Produk
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $price = str_replace('.', '', $_POST['price']); // Hapus titik dari harga
    $rating = $_POST['rating'];
    $category = $_POST['category']; // Ambil kategori dari form

    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $sql = "INSERT INTO products (name, weight, type, quantity, price, rating, category, image) 
            VALUES ('$name', '$weight', '$type', $quantity, '$price', $rating, '$category', '$image')";
    mysqli_query($conn, $sql);
    header("Location: admin.php");
}

// Proses Update Produk
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $price = str_replace('.', '', $_POST['price']); // Hapus titik dari harga
    $rating = $_POST['rating'];
    $category = $_POST['category']; // Ambil kategori dari form

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);

        $sql = "UPDATE products SET name='$name', weight='$weight', type='$type', quantity=$quantity, price='$price', rating=$rating, category='$category', image='$image' WHERE id=$id";
    } else {
        $sql = "UPDATE products SET name='$name', weight='$weight', type='$type', quantity=$quantity, price='$price', rating=$rating, category='$category' WHERE id=$id";
    }
    mysqli_query($conn, $sql);
    header("Location: admin.php");
}

// Proses Hapus Produk
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM products WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: admin.php");
}

// Query untuk menampilkan produk
$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Produk</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Kelola Produk</h1>

        <!-- Form Tambah/Update Produk -->
        <form action="admin.php" method="POST" enctype="multipart/form-data" class="form-product">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="text" name="name" placeholder="Nama Produk" value="<?= $name ?>" required>
            <input type="text" name="weight" placeholder="Berat Produk (Contoh: 5 Grm)" value="<?= $weight ?>">
            <input type="text" name="type" placeholder="Tipe Produk" value="<?= $type ?>" required>
            <input type="number" name="quantity" placeholder="Jumlah" value="<?= $quantity ?>" required>
            <input type="text" name="price" id="price" placeholder="Harga (Contoh: 1.000.000)" value="<?= number_format((int) str_replace('.', '', $price), 0, ',', '.') ?>" required oninput="formatPrice(this)">
            <input type="number" step="0.1" name="rating" placeholder="Rating" value="<?= $rating ?>" required>
            <input type="text" name="category" placeholder="Kategori Produk" value="<?= $category ?>" required>
            <input type="file" name="image" accept="image/*">
            <?php if ($image): ?>
                <p>Gambar Saat Ini: <img src="uploads/<?= $image ?>" width="80"></p>
            <?php endif; ?>
            <button type="submit" name="<?= $id ? 'update' : 'create' ?>">
                <?= $id ? 'Update Produk' : 'Tambah Produk' ?>
            </button>
            <a href="admin.php" class="btn-cancel">Cancel</a>
        </form>

        <!-- Tabel Produk -->
        <table class="table-products">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Berat</th>
                    <th>Tipe</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Rating</th>
                    <th>Kategori</th> <!-- Menambahkan Kategori -->
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['weight'] ?></td>
                        <td><?= $row['type'] ?></td>
                        <td><?= $row['quantity'] ?></td>
                        <td>Rp <?= number_format((int) str_replace('.', '', $row['price']), 0, ',', '.') ?></td>
                        <td><?= number_format($row['rating'], 1) ?></td>
                        <td><?= $row['category'] ?></td> <!-- Menampilkan Kategori -->
                        <td><img src="uploads/<?= $row['image'] ?>" width="80" alt="<?= $row['name'] ?>"></td>
                        <td>
                            <a href="admin.php?edit=<?= $row['id'] ?>" class="btn-edit">Edit</a>
                            <a href="admin.php?delete=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        function formatPrice(input) {
            let value = input.value.replace(/[^0-9]/g, ''); // Hanya angka
            input.value = new Intl.NumberFormat('id-ID').format(value); // Format angka ke IDR
        }
    </script>

    <style>
        .btn-cancel {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 10px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }

        .btn-cancel:hover {
            background-color: #e60000;
        }
    </style>
</body>
</html>
