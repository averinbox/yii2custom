<?php
namespace common\components;

use Yii;

class Application extends \yii\web\Application
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
