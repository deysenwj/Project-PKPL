<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $productId = $data['id'];
    $productName = $data['name'];
    $productPrice = $data['price'];
    $productQuantity = $data['quantity'];

    $sql = "INSERT INTO cart (product_id, name, price, quantity) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isdi", $productId, $productName, $productPrice, $productQuantity);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
}
$conn->close();
?>
