<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Residente */

$this->title = $model->nombre_completo;
$this->params['breadcrumbs'][] = ['label' => 'Residentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="residente-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'apellido',
            'fecha_nacimiento',
            'estado_civil',
            'imagen',
            'nacionalidad',
            'hobbies',
            'empresa',
            ['label' => 'Telefonos', 'value' =>$model->telefonos,'format' => 'raw'],
            ['label' => 'Preferencias', 'value' => $model->preferencias, 'format' => 'raw'] 
        ],
    ]) 
        
        ?>
    
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

</div>
