<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Visita */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visita-view">

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

    <?php if ($model->tipo == 'Residente'){ ?> 
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            'apellido',
            'identidad',
            'tipo',
            ['label' => 'Destino', 'value' => $model->getResidenteName()],
            ['label' => 'Hora Entrada','value' => $model->getResidenteVisitaHoraEntrada()],
            ['label' => 'Hora Salida', 'value' => $model->getResidenteVisitaHoraSalida()]
        ],
    ]) ?>
    
    <?php }else{?>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            'apellido',
            'identidad',
            'tipo',
            ['label' => 'Destino', 'value' => $model->getEventoName()],
            ['label' => 'Hora Entrada','value' => $model->getEventoVisitaHoraEntrada()],
            ['label' => 'Hora Salida', 'value' => $model->getEventoVisitaHoraSalida()]
        ],
    ]) ?>
    
    <?php }?>
    
</div>
