<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'active-form',
]);

echo $form->field($model, 'title');
echo $form->field($model, 'body');
?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
