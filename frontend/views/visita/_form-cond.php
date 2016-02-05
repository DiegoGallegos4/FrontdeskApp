<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Residente;
use backend\models\Evento;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Visita */
/* @var $model backend\models\ResidenteVisita */
/* @var $model backend\models\EventoVisita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if($model->tipo == 'Residente' ){ ?>  
    
        

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
    
        <?= $form->field($ResidenteVisita,'residente_id')->dropDownList(Residente::find()->select(['nombre_completo'])->indexBy('id')->column()) ?>
    <?php }else{ ?>
       
        <?= $form->field($EventoVisita,'hora_entrada')->widget(DateTimePicker::className(),[
            'type' => DateTimePicker::TYPE_INPUT,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy/mm/dd hh:ii'
            ]
        ]) ?> 

        <?= $form->field($EventoVisita,'hora_salida')->widget(DateTimePicker::className(),[
            'type' => DateTimePicker::TYPE_INPUT,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy/mm/dd hh:ii'
            ]
        ]) ?> 
     
        <?= $form->field($EventoVisita,'evento_id')->dropDownList(Evento::find()->select(['nombre_evento','id'])->indexBy('id')->column()) ?>
    <?php } ?>
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'identidad')->textInput(['maxlength' => true]) ?>
   

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id' => 'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
