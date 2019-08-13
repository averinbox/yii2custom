<?php

use common\components\Application;

use Dotenv\Dotenv;

require __DIR__ . '/../config/defines.php';
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../framework/Yii.php';

if (file_exists(dirname(__DIR__) . '/.env')) {
    (new Dotenv(dirname(__DIR__)))->load();
}

require __DIR__ . '/../config/bootstrap.php';
$config = require __DIR__ . '/../config/config.php';


$application = new Application($config);
$application->run();
