<?php
return [
    'name' => 'cms',
    'connection' => 'mysql:host=localhost',
    'username' => 'root',
    'password' => 'root',
    'options' => [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => true,
        PDO::ERRMODE_EXCEPTION => true
    ]
];
