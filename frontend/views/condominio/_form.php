<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Condominio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="condominio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'condominio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? 'Crear' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id'=>'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
