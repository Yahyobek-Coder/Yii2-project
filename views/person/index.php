<?php
/**
 * @var $model \frontend\models\Person
 */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$form = ActiveForm::begin([
    'id' => 'active-form',
    'options' => [
        'enctype' => 'multipart/form-data'
    ],
]);

echo $form->field($model, 'firstname');
echo $form->field($model, 'lastname');
echo $form->field($model, 'email')->input('email');
echo $form->field($model, 'gender');
?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
