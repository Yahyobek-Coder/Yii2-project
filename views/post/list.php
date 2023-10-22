<h1>Post List Page</h1>

<?php
/**
 ** @var $model\frontend\models\Post
 */
$this->title = 'Post / List';
$this->params['breadcrumbs'][] = $this->title;

use yii\bootstrap5\LinkPager;

echo "<table class='table table-striped'>";
foreach ($model as $item) {
    echo "<tr>";
    echo "<td>".$item->id."</td>";
    echo "<td>".$item->category."</td>";
    echo "<td>".$item->title."</td>";
    echo "<td>".$item->body."</td>";

    echo "</tr>";
}

    echo "</table>";


echo LinkPager::widget([
    'pagination' => $pagination,
]);
?>