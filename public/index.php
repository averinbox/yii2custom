<?php

use common\components\Application;
use Dotenv\Dotenv;

require __DIR__ . '/../config/defines.php';
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../framework/Yii.php';

try {
    (new Dotenv(dirname(__DIR__)))->load();
} catch(Exception $e){
    echo Yii::t('app', 'Создайте и сконфигурируйте файл .env на основе .env.example'); exit;
}

require __DIR__ . '/../config/bootstrap.php';
$config = require __DIR__ . '/../config/config.php';

$application = new Application($config);
$application->run();
