<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResidenteForm */
/* @var $form ActiveForm */
?>
<div class="residente">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'apellido') ?>
        <?= $form->field($model, 'fecha_nacimiento') ?>
        <?= $form->field($model, 'estado_civil') ?>
        <?= $form->field($model, 'hobbies') ?>
        <?= $form->field($model, 'empresa') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- residente -->