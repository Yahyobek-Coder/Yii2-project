<?php

namespace frontend\controllers;

use yii\db\Query;
use yii\web\Controller;
use yii;
class ProductController extends Controller
{
    public function actionIndex()
    {
      //  $product = Yii::$app->db->createCommand('SELECT * FROM products')
      //      ->queryAll();
        $product = (new Query())->select('*')->from('products')->where('id=2')->one();
        return $this->render('index', ['product'=>$product]);
    }
}