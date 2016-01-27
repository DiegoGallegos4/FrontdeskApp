<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\controllers\ResidenteVisitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="residente-visita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'residente_id') ?>

    <?= $form->field($model, 'visita_id') ?>

    <?= $form->field($model, 'hora_entrada') ?>

    <?= $form->field($model, 'hora_salida') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
