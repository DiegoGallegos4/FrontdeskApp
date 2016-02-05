<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Residente;

/* @var $this yii\web\View */
/* @var $model backend\models\EmpleadoResidente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleado-residente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'residente_id')->dropDownList(Residente::find()->select(['nombre_completo','id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posicion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagen')->textInput() ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? 'Crear' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id' => 'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
