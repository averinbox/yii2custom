<?php
namespace common\components;

use Yii;
use \yii\web\Application as YiiApplication;

class Application extends YiiApplication
{
    public function runAction($route, $params = [])
    {
        /** Параметр дейсвия контроллера Request */
        if (false === isset($params['request'])) {
            $params['request'] = Yii::$app->getRequest();
        }

        return parent::runAction($route, $params);
    }

}
