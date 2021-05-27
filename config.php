<?php

return [
    'database' =>[
        'name' => 'groceries',
        'username' => 'postgres',
        'password' => 'herp',
        'connection' => 'pgsql:host=127.0.0.1',
        'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    ]
];