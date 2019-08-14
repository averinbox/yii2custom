<?php declare(strict_types=1);
/**
 * Database settings file.
 */

$db = [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('DATABASE_TYPE') . ':host=' . getenv('DATABASE_HOST') .';dbname=' . getenv('DATABASE_NAME'),
    'username' => getenv('DATABASE_USER'),
    'password' => getenv('DATABASE_PASSWORD'),
    'charset' => getenv('DATABASE_CHARSET'),
];

!getenv('DATABASE_PREFIX') ?: $db['tablePrefix'] = getenv('DATABASE_PREFIX');
!(getenv('DATABASE_SCHEMA_CACHE') === 'true') ?: $db['enableSchemaCache'] = true;

return $db;
