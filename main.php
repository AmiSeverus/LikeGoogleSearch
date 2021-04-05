<?php

$appPath = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR. '..');

return [
    'app_path' => $appPath,
    'controllers_path' => $appPath . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controllers',
    'db' => [
        'local' =>[
            'type' => mySql::class,
            'host' => '127.0.0.1',
            'port' => '3306',
            'login' => 'test',
            'password' => 'testtest',
            'name' => 'test'
        ],
        'db_node_1' => '',
    ]
];