<?php

use yii\helpers\ArrayHelper;
use yii\log\FileTarget;

$basePath = dirname(__DIR__);
$extensions = require __DIR__ . '/../vendor/yiisoft/extensions.php';
$db = require __DIR__ . '/db.php';
$possibleHosts = array_diff(scandir(Yii::getAlias('@applications')), ['.', '..']);
$currentApplicationID = explode('.', $_SERVER['HTTP_HOST'])[0];

$config = [
    'id' => 'base-app',
    'extensions' => $extensions,
    'runtimePath' => $basePath . '/runtime',
    'basePath' => $basePath . '/src',
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'enableCookieValidation' => false,
            'cookieValidationKey' => '',
        ],
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
    $config['components']['urlManager']['rules'][
        getenv('DEFAULT_SCHEMA') .
        'gii.' . getenv('DEFAULT_HOST')] = 'gii/default';
}

if (file_exists(__DIR__ . '/db.php')) {
    $config['components']['db'] = $db;
}

if (false === in_array($currentApplicationID, $possibleHosts)) {
    $currentApplicationID = 'frontend';
}

if ($currentApplicationID === 'gii') {
    return $config;
}

return ArrayHelper::merge($config,
    require $basePath . '/src/applications/' . $currentApplicationID . '/config/config.php');
