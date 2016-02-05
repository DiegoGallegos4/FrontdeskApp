<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Visita */

$this->title = 'Actualizar Visita: ' . ' ' . $model->tipo;
$this->params['breadcrumbs'][] = ['label' => 'Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-cond', [
        'model' => $model,
        'EventoVisita' => $EventoVisita,
        'ResidenteVisita' => $ResidenteVisita,
    ]) ?>

</div>
