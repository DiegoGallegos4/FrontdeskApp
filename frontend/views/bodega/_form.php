<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Torre;

/* @var $this yii\web\View */
/* @var $model backend\models\Bodega */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bodega-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bodega')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'torre_id')->dropDownList(Torre::find()->select(['nombre','id'])->indexBy('id')->column(),
            ['prompt' => 'Seleccione la torre']) ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? 'Crear' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id' => 'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>