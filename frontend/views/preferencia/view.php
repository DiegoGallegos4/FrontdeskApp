<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Preferencia */

$this->title = $model->residente->nombre_completo;
$this->params['breadcrumbs'][] = ['label' => 'Preferencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preferencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            ['attribute' => 'residente_id', 'value' => $model->residente->nombre_completo],
            'tipo_contacto',
            'horario_contacto',
            'contacto_emergencia',
            'tipo_recepcion',
            'apoyo_compras',
        ],
    ]) ?>

</div>
