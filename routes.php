<?php

$router->get('', 'controllers/index.php');

$router->get('create', 'controllers/create.php');

$router->post('groceries', 'controllers/add-item.php');

