<?php
$db = require_once "db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM product WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->execute([":id" => $id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="actions/update.php" method="post">
    <input type="text" value="<?=$row['name']?>" name="name">
    <input type="text" value="<?=$row['price']?>" name="price">
    <input type="hidden" value="<?=$row['id']?>" name="id">
    <input type="submit" value="Изменить">
</form>
</body>
</html>
