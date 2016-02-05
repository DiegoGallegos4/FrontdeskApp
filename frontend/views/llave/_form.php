<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Condominio;

/* @var $this yii\web\View */
/* @var $model backend\models\Llave */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="llave-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lugar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id' => 'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
