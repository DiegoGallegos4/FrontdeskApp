<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\controllers\ControlLlaveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="control-llave-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'llave_id') ?>

    <?= $form->field($model, 'empleado_id') ?>

    <?= $form->field($model, 'fecha_entrega') ?>

    <?= $form->field($model, 'fecha_devolucion') ?>

    <?php // echo $form->field($model, 'forma_autorizacion') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
