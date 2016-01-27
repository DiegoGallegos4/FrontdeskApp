<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteCondominio */

$this->title = $model->residente_id;
$this->params['breadcrumbs'][] = ['label' => 'Residente Condominios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-condominio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'residente_id' => $model->residente_id, 'condominio_id' => $model->condominio_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'residente_id' => $model->residente_id, 'condominio_id' => $model->condominio_id], [
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
            'condominio_id',
        ],
    ]) ?>

</div>
