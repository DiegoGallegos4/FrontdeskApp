<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Residente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="residente-form  col-lg-4">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_nacimiento')->widget(DatePicker::className(),[
        'dateFormat' => "yyyy-MM-dd",
        'options'=>['class' => 'form-control']
    ]) ?>

    <?= $form->field($model, 'estado_civil')->dropDownList(["Casado"=> 'Casado',"Soltero"=>'Soltero']) ?>

    <?= $form->field($model, 'imagen')->textInput() ?>

    <?= $form->field($model, 'nacionalidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hobbies')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empresa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
