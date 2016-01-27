<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Torre;

/* @var $this yii\web\View */
/* @var $model backend\models\AreaComun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="area-comun-form col-lg-4">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'torre_id')->dropDownList(Torre::find()->select(['nombre','id'])->indexBy('id')->column()) ?>
    <?= $form->field($model, 'descripcion')->textarea() ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
