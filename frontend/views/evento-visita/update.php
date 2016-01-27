<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EventoVisita */

$this->title = 'Update Evento Visita: ' . ' ' . $model->evento_id;
$this->params['breadcrumbs'][] = ['label' => 'Evento Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->evento_id, 'url' => ['view', 'evento_id' => $model->evento_id, 'visita_id' => $model->visita_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="evento-visita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
