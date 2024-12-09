<?php
$db = require_once 'db.php';

$products = $db->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
$entrance_products = $db->query("SELECT * FROM entrance_product")->fetchAll(PDO::FETCH_ASSOC);
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
            <td><a href="store.php">Добавить запись</a></td>
        </tr>
        <tr>
            <td>id</td>
            <td>time</td>
            <td></td>
        </tr>
        <tr>

        </tr>
    </table>
</div>
</body>
</html>
