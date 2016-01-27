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
    
    <?php
        $destino;
        $hora_entrada;
        $hora_salida;
        
        if($model->tipo == 'Residente'){
            $destino = $model->residentes[0]->attributes['nombre_completo'];
            $hora_entrada = $model->residenteVisitas[0]->attributes['hora_entrada'];
            $hora_salida = $model->residenteVisitas[0]->attributes['hora_salida'];
        } else{
            $destino = $model->eventos[0]->attributes['nombre_evento'];
            $hora_entrada = $model->eventoVisitas[0]->attributes['hora_entrada'];
            $hora_salida = $model->eventoVisitas[0]->attributes['hora_salida'];
            
        }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            'apellido',
            'identidad',
            'tipo',
            ['label' => 'Destino', 'value' => $destino],
            ['label' => 'Hora Entrada','value' => $hora_entrada],
            ['label' => 'Hora Salida', 'value' => $hora_salida]
        ],
    ]) ?>

</div>
