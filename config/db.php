<?php
/**
 * Database settings file.
 */

return [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('DATABASE_TYPE') . ':host='. getenv('DATABASE_HOST') .';dbname=' . getenv('DATABASE_NAME'),
    'username' => getenv('DATABASE_USER'),
    'password' => getenv('DATABASE_PASSWORD'),
    'charset' => getenv('DATABASE_CHARSET'),
    'tablePrefix' => getenv('DATABASE_PREFIX'),
    'enableSchemaCache' => getenv('DATABASE_SCHEMA_CASHE')
];