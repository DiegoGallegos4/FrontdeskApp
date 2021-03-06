<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Telefono */

$this->title = 'Actualizar Telefono: ' . ' ' . $model->telefono;
$this->params['breadcrumbs'][] = ['label' => 'Telefonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="telefono-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
