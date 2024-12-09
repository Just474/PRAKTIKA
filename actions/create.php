<?php
$db = require_once '../db.php';

$name = $_POST['name'];
$price = $_POST['price'];

$sql = "INSERT INTO product (name, price) VALUES (:name, :price)";
$stmt = $db->prepare($sql);
try {
    $stmt->execute([
        ':name' => $name,
        ':price' => $price
    ]);
    header("location: ../");
} catch (PDOException $e) {
    echo "Неизвестная ошибка";
}
