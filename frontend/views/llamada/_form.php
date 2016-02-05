<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Residente;

/* @var $this yii\web\View */
/* @var $model backend\models\Llamada */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="llamada-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'residente_id')->dropDownList(Residente::find()->select(['nombre_completo','id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'mensaje')->textarea()?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id' => 'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
