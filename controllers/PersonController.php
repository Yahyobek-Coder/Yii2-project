<?php

namespace frontend\controllers;

use frontend\models\Person;
use yii\db\Query;
use yii\web\Controller;

class PersonController extends Controller
{
    public function actionIndex()
    {
        $person = new Person();
        if(\Yii::$app->request->isPost){
            $person->load(\Yii::$app->request->post());
            $person->save();
        }
    }

    public function actionAdd(){
        $users_query = (new Query())->from('person')->all();
        $users = Person::find()->where(['id'=>1])->one();
        return $this->render('add',['model' =>$users_query, 'model_a'=>$users]);
    }
    public function actionUpdate($id){
        $person = Person::findOne($id);
        if(\Yii::$app->request->isPost){
            $person->load(\Yii::$app->request->post());
            $person->save();
        }
        return $this->render('update', ['model'=>$person]);
    }
}