<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\controllers\PreferenciaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preferencia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'residente_id') ?>

    <?= $form->field($model, 'tipo_contacto') ?>

    <?= $form->field($model, 'horario_contacto') ?>

    <?= $form->field($model, 'contacto_emergencia') ?>

    <?php // echo $form->field($model, 'tipo_recepcion') ?>

    <?php // echo $form->field($model, 'apoyo_compras') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
