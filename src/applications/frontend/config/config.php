<?php

/**
 * Файл конфигурации абстракции frontend
 */

$applicationPath = dirname(__DIR__);
$viewPath = $applicationPath . '/views';
$routes = include __DIR__ . '/routes.php';

return [
    'id' => 'frontend',
    'defaultRoute' => 'default/index',
    'viewPath' => $viewPath,
    'layoutPath' => $viewPath,
    'controllerNamespace' => 'app\\applications\\frontend\\controllers',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => $routes
        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => [
                        'html' => ['class' => '\yii\helpers\Html'],
                    ],
                    'filters' => [
                        'dump' => 'var_dump',
                        'phpdate' => 'date',
                    ],
                    'uses' => ['yii\bootstrap'],
                ]
            ],
        ],
    ]
];
