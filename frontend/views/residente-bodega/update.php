<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteBodega */

$this->title = 'Editar Residente Bodega: ' . ' ' . $model->residente_id;
$this->params['breadcrumbs'][] = ['label' => 'Residente Bodegas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->residente_id, 'url' => ['view', 'residente_id' => $model->residente_id, 'bodega_id' => $model->bodega_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="residente-bodega-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
