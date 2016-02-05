<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ControlLlaveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Control de Llaves';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-llave-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Prestamo de Llave', ['class' => 'btn btn-success',
                                                       'id' => 'modalButtonCrear',
                                                        'value' => Url::to('/control-llave/create')]) ?>
        <?= Html::button('Crear Llave', ['class' => 'btn btn-info',
                                         'id' => 'modalButtonLlave',
                                         'value' => Url::to('/llave/create')]); ?>
        
        <?php 
            Modal::begin([
                'id' => 'modalLlave',
            ]);
            
            echo "<div id='modalContent'></div>";
            Modal::end();        
        ?>
        
        <?php 
            Modal::begin([
                'id' => 'modalCrear',
            ]);
            
            echo "<div id='modalContent'></div>";
            Modal::end();        
        ?>
    </p>
    
    
    <?php Pjax::begin() ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'llave_id','value' => 'llave.lugar'],
            ['attribute' => 'empleado_id','value' => 'empleado.nombre'],
            'fecha_entrega',
            'fecha_devolucion',
            // 'forma_autorizacion',
            // 'observaciones',

            ['class' => 'yii\grid\ActionColumn',
             'buttons' => [
                'update' => function($url,$model) {
                   return Html::a('<span class="glyphicon glyphicon-pencil"></span>',$url,['class' => 'update']);
                }, 
                ]
            ],
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>
