<?php

namespace frontend\modules\billing\controllers;

use yii\web\Controller;
class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}