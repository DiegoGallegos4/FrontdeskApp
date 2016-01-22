<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\PaqueteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paquetes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paquete-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Paquete', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'residente_id','value' => 'residente.nombre_completo'],
            'num_buzon',
            'fecha',
            'entregado_por',
            'observaciones',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
