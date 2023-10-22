<?php

use yii\grid\GridView;
use yii\bootstrap5\Html;
use yii\grid\CheckboxColumn;

echo GridView::widget([
    'dataProvider' => $provider,
    'filterModel'=>$searchModel,
    'tableOptions' => ['class' => 'table table-striped table-bordered'],
    'showFooter' => true,
    'summary' => 'Showing <b>{begin}-{end}</b> of <b>{totalCount}</b> Items',

    'columns' => [
        ['class' => CheckboxColumn::className()],
        'id',
        'title',
        'body',
        [
            'label' => 'Image',
            'format' => 'raw',
            'value' => function ($data) {
                return Html::img(Yii::getAlias('@web') . '/img/image.jpg', [
                    'alt' => 'yii2 - image in gridview',
                    'style' => 'width: 45px;',
                ]);
            },
        ],
        [
            'label' => 'Link',
            'format' => 'raw',
            'value' => function ($data) {
                return Html::a('Go', ['post/view', 'id' => $data->id], [
                    'title' => 'Go go go',
                    'target' => '_blank',
                ]);
            },
        ],
        ['class'=> 'yii\grid\ActionColumn']
    ],
    'pager'=>[
        'class'=>\yii\bootstrap5\LinkPager::class
    ],
]);