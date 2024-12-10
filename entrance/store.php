<?php
$db = require_once "../db.php";

$products = $db->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
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
<form action="insert.php" method="post">
    <select name="product_id" id="selectProduct">
        <?php foreach ($products as $product):?>
        <option value="<?=$product['id']?>"><?=$product['name']?></option>
        <?php endforeach;?>
    </select>
    <input type="number" name="count_product" value="Введите кол-во товара">
    <input type="submit" value="Добавить">
</form>
</body>
</html>