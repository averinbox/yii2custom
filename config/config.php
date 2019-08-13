<?php

use yii\helpers\ArrayHelper;
use yii\log\FileTarget;

$basePath = dirname(__DIR__);

$config = [
    'id' => 'base-app',
    'runtimePath' => $basePath . '/runtime',
    'basePath' => $basePath . '/src',
    'bootstrap' => ['log'],
    'components' => [
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ]
    ]
];

if(file_exists(__DIR__ . '/db.php')) {
    $config['components']['db'] = require __DIR__ . '/db.php';
}

$possibleHosts = array_diff(scandir(Yii::getAlias('@applications')), ['.', '..']);
$currentApplicationID = explode('.', $_SERVER['HTTP_HOST'])[0];

if (false === in_array($currentApplicationID, $possibleHosts)) {
    $currentApplicationID = 'frontend';
}

if ($currentApplicationID === 'gii') {
    return $config;
}

return ArrayHelper::merge($config,
    require $basePath . '/src/applications/' . $currentApplicationID . '/config/config.php');
