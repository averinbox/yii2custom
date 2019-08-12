<?php

$applicationPath = dirname(__DIR__);

return [
    'id' => 'commands',
    'basePath' => $applicationPath,
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => getenv('DATABASE_TYPE') . ':host=' . getenv('DATABASE_HOST') . ';dbname=' . getenv('DATABASE_NAME'),
            'username' => getenv('DATABASE_USER'),
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'yii_',
            'enableSchemaCache' => false
        ]
    ]
];