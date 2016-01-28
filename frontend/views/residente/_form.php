<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Residente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="residente-form">

    <?php $form = ActiveForm::begin(['id'=>'nuevo-residente']); ?>

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
        <?= Html::button($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id' => 'crear']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php 
$form = <<<form
        $('#nuevo-residente').submit(function(e){
        console.log('hey!');
        e.preventDefault();
        e.stopPropagation();
        });
form;
//$this->registerJs($form);

?>