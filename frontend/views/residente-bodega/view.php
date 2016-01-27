<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteBodega */

$this->title = $model->residente_id;
$this->params['breadcrumbs'][] = ['label' => 'Residente Bodegas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-bodega-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'residente_id' => $model->residente_id, 'bodega_id' => $model->bodega_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'residente_id' => $model->residente_id, 'bodega_id' => $model->bodega_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'residente_id',
            'bodega_id',
        ],
    ]) ?>

</div>
