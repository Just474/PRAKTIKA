<?php
$db = require_once "../db.php";

$id = $_GET['id'];
$product_id = $_GET['product_id'];
$products = $db->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
$entrance_product = $db->query("SELECT * FROM entrance_product WHERE id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
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
<form action="edit.php" method="post">
    <select name="name" id="selectProduct">
        <?php foreach ($products as $product):?>
            <option <?=($product['id'] == $product_id)? "selected" : "" ?> value="<?=$product['id']?>"><?=$product['name']?></option>
        <?php endforeach;?>
    </select>
    <input type="number" name="count_product" value="<?=$entrance_product[0]['count_product']?>">
    <input type="hidden" name="id" value="<?=$entrance_product[0]['id']?>">
    <input type="submit">
</form>
</body>
</html>