<?php
$db = require_once "../db.php";

$sql = "DELETE FROM product WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->execute([
    ":id" => $_GET["id"]
]);
header("location: ../");