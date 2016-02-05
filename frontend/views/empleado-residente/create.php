<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmpleadoResidente */

$this->title = 'Crear Empleado Residente';
$this->params['breadcrumbs'][] = ['label' => 'Empleado Residente', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleado-residente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
