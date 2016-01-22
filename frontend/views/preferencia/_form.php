<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Residente;

/* @var $this yii\web\View */
/* @var $model backend\models\Preferencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preferencia-form col-lg-4">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'residente_id')->dropDownList(Residente::find()->select(['nombre_completo','id'])->indexBy('id')->column(),
            ['prompt' => 'Seleccione el residente']) ?>

    <?= $form->field($model, 'tipo_contacto')->dropDownList(['Celular' => 'Celular','WhatsApp' => 'WhatsApp']) ?>

    <?= $form->field($model, 'horario_contacto')->dropDownList(['Mañana' => 'Mañana','Tarde' =>'Tarde','Noche'=>'Noche']) ?>

    <?= $form->field($model, 'contacto_emergencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_recepcion')->dropDownList(['Lobby' => 'Lobby','Condominio' => 'Condominio']) ?>

    <?= $form->field($model, 'apoyo_compras')->dropDownList(['Hasta Lobby' => 'Hasta Lobby','Hasta Condominio' =>'Hasta Condominio','Ningun' => 'Ningun']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
