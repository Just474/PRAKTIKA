<?php
$db = require_once 'db.php';

$products = $db->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
$entrance_products = $db->query("SELECT entrance_product.*, 
       product.name AS product_name,
        product.id AS article
        FROM entrance_product
        LEFT JOIN product 
        ON entrance_product.product_id = product.id  ")->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
        }
        tr{
            border: 1px solid black;
            text-align: center;

        }
        td{
            border: 1px solid black;
            text-align: center;

        }
    </style>
</head>
<body>
<div class="container" style="display: flex;justify-content: space-around">
    <table>
        <tr>
            <td><a href="store.php">Добавить запись</a></td>
        </tr>
        <tr>
            <td>article</td>
            <td>name</td>
            <td>price</td>
        </tr>
        <?php foreach ($products as $product):?>
        <tr>
            <td><?=$product['id']?></td>
            <td><?=$product["name"]?></td>
            <td><?=$product["price"]?></td>
            <td><a href="update.php?id=<?=$product['id']?>">Изменить</a></td>
            <td><a href="actions/delete.php?id=<?=$product['id']?>">Удалить</a></td>
        </tr>
        <?php endforeach;?>
    </table>
    <table>
        <tr>
            <td><a href="entrance/store.php">Добавить запись</a></td>
        </tr>
        <tr>
            <td>id</td>
            <td>product</td>
            <td>product article</td>
            <td>time</td>
            <td>quantity</td>
        </tr>
        <?php foreach ($entrance_products as $entrance_product):?>
        <tr>
            <td><?=$entrance_product["id"]?></td>
            <td><?=$entrance_product["product_name"]?></td>
            <td><?=$entrance_product["article"]?></td>
            <td><?=$entrance_product["time_entrance"]?></td>
            <td><?=$entrance_product["count_product"]?></td>
            <td><a href="entrance/update.php?id=<?=$entrance_product['id']?>&product_id=<?=$entrance_product['product_id']?>">Изменить</a></td>
            <td><a href="entrance/delete.php?id=<?=$entrance_product['id']?>">Удалить</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
</body>
</html>
