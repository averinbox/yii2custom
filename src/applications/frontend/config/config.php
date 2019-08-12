<?php

/**
 * Файл конфигурации абстракции frontend
 */

$applicationPath = dirname(__DIR__);

return [
    'id' => 'frontend',
    'basePath' => $applicationPath,
    'defaultRoute' => 'default/index',
    'layoutPath' => "{$applicationPath}/views",
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => include __DIR__ . '/routes.php'
        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    // Array of twig options:
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => [
                        'html' => ['class' => '\yii\helpers\Html'],
                    ],
                    'uses' => ['yii\bootstrap'],
                ],
                // ...
            ],
        ],
    ]
];