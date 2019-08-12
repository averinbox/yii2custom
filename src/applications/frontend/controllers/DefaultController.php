<?php
/**
 * Created by andrey.
 * User: andrey
 * Date: 2019-08-12
 * Time: 14:26
 */

namespace app\controllers;

use common\models\Test;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $model = new Test();

        return $this->render('index.html.twig');
    }
}