<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Residente;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Visita */
/* @var $model backend\models\ResidenteVisita */
/* @var $model backend\models\EventoVisita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identidad')->textInput(['maxlength' => true]) ?>
   
    <?= $form->field($ResidenteVisita,'residente_id')->dropDownList(Residente::find()->select(['nombre_completo'])->indexBy('id')->column()) ?>

    <?= $form->field($ResidenteVisita,'hora_entrada')->widget(DateTimePicker::className(),[
        'type' => DateTimePicker::TYPE_INPUT,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd hh:ii'
        ]
    ]) ?> 

    <?= $form->field($ResidenteVisita,'hora_salida')->widget(DateTimePicker::className(),[
        'type' => DateTimePicker::TYPE_INPUT,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd hh:ii'
        ]
    ]) ?> 

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
