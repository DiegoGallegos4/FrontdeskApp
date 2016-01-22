<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Residente;

/* @var $this yii\web\View */
/* @var $model backend\models\Telefono */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefono-form col-lg-4">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'residente_id')->dropDownList(Residente::find()->select(['nombre_completo','id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'tipo')->dropDownList(['Casa' => 'Casa','Trabajo' => 'Trabajo','Celular'=>'Celular']) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
