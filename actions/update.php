<?php
$db = require_once "../db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

$sql = "UPDATE product SET name=:name, price=:price WHERE id=:id";
$stmt = $db->prepare($sql);
try {
    $stmt->execute([
        ':name'=>$name,
        ':price'=>$price,
        ':id'=>$id
    ]);
    header("location:../");
}catch (PDOException $e){
    echo "Неизвестная ошибка";
}
