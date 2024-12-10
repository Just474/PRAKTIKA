<?php
$db = require_once "../db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$count_product = $_POST['count_product'];

$sql = "UPDATE entrance_product SET product_id = :name, count_product = :count_product WHERE id = :id";
$stmt = $db->prepare($sql);
try {
    $stmt->execute([
        ':name' => $name,
        ':count_product' => $count_product,
        ':id' => $id
    ]);
    header("Location: ../");
} catch (PDOException $e) {
    echo "Неизвестная ошибка" . $e->getMessage();
}