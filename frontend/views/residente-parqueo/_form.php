<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Residente;
use backend\models\Parqueo;

/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteParqueo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="residente-parqueo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'residente_id')->dropDownList(Residente::find()->select(['nombre_completo','id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'parqueo_id')->dropDownList(Parqueo::find()->select(['parqueo','id'])->indexBy('id')->column()) ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? 'Crear' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id' => 'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
