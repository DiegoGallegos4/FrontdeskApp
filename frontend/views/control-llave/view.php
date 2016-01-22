<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ControlLlave */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Control Llaves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-llave-view">

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
            ['attribute' => 'llave_id', 'value' => $model->llave->lugar],
            ['attribute' => 'empleado_id','value' => $model->empleado->nombre],
            'fecha_entrega',
            'fecha_devolucion',
            'forma_autorizacion',
            'observaciones',
        ],
    ]) ?>

</div>
