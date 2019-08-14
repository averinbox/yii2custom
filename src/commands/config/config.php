<?php

$applicationPath = dirname(__DIR__);
$db = require __DIR__ . '/../../../config/db.php';

return [
    'id' => 'commands',
    'basePath' => $applicationPath,
    'components' => [
        'db' => $db
    ]
];
