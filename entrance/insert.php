<?php
$db = require_once "../db.php";

$product_id = $_POST["product_id"];
$count_product = $_POST["count_product"];

$sql = "INSERT INTO entrance_product (product_id, count_product) VALUES (:product_id, :count_product)";
$stmt = $db->prepare($sql);
try {
    $stmt->execute([
        ":product_id" => $product_id,
        ":count_product" => $count_product
    ]);
    header("Location: ../index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}