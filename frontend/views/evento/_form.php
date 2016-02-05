<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\AreaComun;
use backend\models\Residente;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Evento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'residente_id')->dropDownList(Residente::find()->select(['nombre_completo','id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'nombre_evento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_inicio')->widget(DateTimePicker::className(),[
        'name' => 'date_picker_1',
        'type' => DateTimePicker::TYPE_INPUT,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd hh:ii'
        ]
    ]) ?>

    <?= $form->field($model, 'fecha_fin')->widget(DateTimePicker::className(),[
        'name' => 'date_picker_1',
        'type' => DateTimePicker::TYPE_INPUT,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd hh:ii'
        ]
    ]) ?>

    <?= $form->field($model, 'contrato')->textInput() ?>

    <?= $form->field($model, 'area_id')->dropDownList(AreaComun::find()->select(['nombre','id'])->indexBy('id')->column()) ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id' => 'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
