<?php
/**
 * Main Yii config.
 */
$basePath = dirname(__DIR__);

$config = [
    'id' => 'base-app',
    'runtimePath' => $basePath . '/runtime',
//    'basePath' => $basePath . '/src',
    'bootstrap' => ['log'],
    'components' => [
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ]
    ]
];

if(file_exists(__DIR__ . '/db.php')) {
    $config['components']['db'] = require __DIR__ . '/db.php';
}

$possibleHosts = ['admin', 'frontend', 'api'];
$currentApplicationID = explode('.', $_SERVER['HTTP_HOST'])[0];

if (false === in_array($currentApplicationID, $possibleHosts)) {
    $currentApplicationID = 'frontend';
}

if ($currentApplicationID === 'gii') {
    return $config;
}

return \yii\helpers\ArrayHelper::merge($config,
    require "{$basePath}/src/applications/{$currentApplicationID}/config/config.php");