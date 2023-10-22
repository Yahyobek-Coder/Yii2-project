<?php

use yii\widgets\ActiveForm;

use yii\helpers\Html;

    $form = ActiveForm::begin([
        'id' => 'active-form',
        'options' => [
            'enctype' => 'multipart/form-data'
        ],
    ]);

echo $form->field($model, 'firstname');
echo $form->field($model, 'email');
echo $form->field($model, 'age')->checkbox(array(
    'label' => '',
    'labelOptions' => array('style' => 'padding:5px;'),

))->label('Gender');

echo $form->field($model, 'gender')->radioList([
    'erkak' => "Erkak", "ayol" => 'Ayol'
])->label('Jinsi');

echo $form->field($model, 'gender')->dropDownList(
    [
    'erkak' => "Erkak",
    "ayol" => 'Ayol']
);

echo $form->field($model, 'age')->fileInput();

?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
