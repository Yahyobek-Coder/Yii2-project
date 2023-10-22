<?php

namespace frontend\controllers;

use frontend\models\MyLogin;
use frontend\models\Post;
use frontend\models\PostSearch;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\web\Controller;
use Yii;

class PostController extends Controller
{
    public function actionList()
    {

        $query = Post::find();
        $total_count = $query->count();

        $pagination = new Pagination([
            'totalCount' => $total_count,
            'pageSize' => 5,
        ]);

        $posts = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $model = $posts;

        return $this->render('list', ['model' => $model, 'pagination' => $pagination]);
    }

    public function actionAdd()
    {
        $model = new MyLogin();
        return $this->render('add', ["model" => $model]);
    }

    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->get());

        $dataProvider->pagination->pageSize = 10;

        return $this->render('index', [
            'provider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    public function actionView($id)
    {
        $model = Post::findOne($id);
        return $this->render('view', ['model'=>$model]);
    }

    public function actionUpdate($id)
    {
        $model = Post::Findone($id);
        return $this->render('update', ['model'=>$model]);
    }
    public function actionDelete($id)
    {

    }
}