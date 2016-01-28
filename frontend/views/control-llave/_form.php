<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Llave;
use backend\models\Empleado;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlLlave */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="control-llave-form ">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'llave_id')->dropDownList(Llave::find()->select(['lugar','id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'empleado_id')->dropDownList(Empleado::find()->select(['nombre','id'])->indexBy('id')->column()) ?>

    <?= $form->field($model, 'fecha_entrega')->widget(DateTimePicker::className(),[
        'type' => DateTimePicker::TYPE_INPUT,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd hh:ii'
        ]
    ]) ?>
    <?= $form->field($model, 'fecha_devolucion')->widget(DateTimePicker::className(),[
        'type' => DateTimePicker::TYPE_INPUT,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd hh:ii'
        ]
    ]) ?>

    <?= $form->field($model, 'forma_autorizacion')->dropDownList(['Telefono' => 'Telefono','Mensaje' => 'Mensaje','NA' => 'NA']) ?>

    <?= $form->field($model, 'observaciones')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
