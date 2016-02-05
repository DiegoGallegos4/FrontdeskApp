<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Torre;

/* @var $this yii\web\View */
/* @var $model backend\models\Parqueo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parqueo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parqueo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'torre_id')->dropDownList(Torre::find()->select(['nombre','id'])->indexBy('id')->column(),
            ['prompt' => "Seleccione la torre"])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
