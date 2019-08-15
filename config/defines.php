<?php

$debug = getenv('YII_DEBUG') === 'true' ? true : false;

defined('YII_DEBUG') or define('YII_DEBUG', $debug);
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV'));
