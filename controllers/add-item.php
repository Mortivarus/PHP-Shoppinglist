<?php
$app['database']->insert('groceries', [
    'name' => $_POST['name'],
    'number'=> $_POST['number'],
    'price' => $_POST['price']
]);

header('Location: /');