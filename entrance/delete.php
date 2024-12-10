<?php
$db = require_once "../db.php";

$id = $_GET['id'];
$sql = "DELETE FROM entrance_product WHERE id = :id";
$stmt = $db->prepare($sql);
try {
    $stmt->execute([
        ":id" => $id
    ]);
    header("Location: ../");
} catch (PDOException $e) {
    echo "Неизвестная ошибка";
}