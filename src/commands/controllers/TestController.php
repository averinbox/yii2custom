<?php
/**
 * Created by andrey.
 * User: andrey
 * Date: 2019-08-13
 * Time: 11:48
 */

namespace app\controllers;

use yii\console\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo 123 . PHP_EOL;
    }
}