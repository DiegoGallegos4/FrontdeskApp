<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\LlamadaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Llamadas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="llamada-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Crear Evento',['class' => 'btn btn-success', 
                                    'id' => 'modalButtonCrear', 'value' => Url::to('/llamada/create')]) ?>
    </p>
    
    <?php
        Modal::begin([
            'id' => 'modalCrear'
        ]);
        
        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>

    <?php Pjax::begin() ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'residente_id','value' => 'residente.nombre_completo','label' => 'Residente'],
            'nombre',
            'telefono',
            'mensaje',
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
