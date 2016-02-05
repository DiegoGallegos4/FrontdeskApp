<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmpleadoResidente */

$this->title = 'Editar Empleado Residente: ' . ' ' . $model->residente->nombre_completo;
$this->params['breadcrumbs'][] = ['label' => 'Empleado Residentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empleado-residente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
