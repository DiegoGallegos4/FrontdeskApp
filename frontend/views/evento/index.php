<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\EventoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Crear Evento',['class' => 'btn btn-success', 
                                    'id' => 'modalButtonCrear', 'value' => Url::to('/evento/create')]) ?>
    </p>
    
    <?php
        Modal::begin([
            'id' => 'modalCrear'
        ]);
        
        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=> 'residente_id','value' => 'residente.nombre_completo','label' => 'Residente'],
            'nombre_evento',
            'fecha_inicio',
            'fecha_fin',
            // 'contrato',
            ['attribute' => 'area_id','value' => 'area.nombre','label' => 'Area Comun'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
