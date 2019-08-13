<?php
/**
 * Created by andrey.
 * User: andrey
 * Date: 2019-08-12
 * Time: 14:26
 */

namespace app\controllers;

use common\components\Controller;
use common\models\Test;
use yii\web\Request;
use yii\web\Response;

class DefaultController extends Controller
{
    public function actionIndex(Request $request): Response
    {
        $model = new Test();
        return $this->render('index.html.twig', ['model' => $model, 'request' => $request]);
    }
}