<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteVisita */

$this->title = 'Update Residente Visita: ' . ' ' . $model->residente_id;
$this->params['breadcrumbs'][] = ['label' => 'Residente Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->residente_id, 'url' => ['view', 'residente_id' => $model->residente_id, 'visita_id' => $model->visita_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="residente-visita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
