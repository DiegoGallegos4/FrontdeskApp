<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ResidenteBodegaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Residente Bodegas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-bodega-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Residente Bodega', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'residente_id', 'value' => 'residente.nombre_completo'],
            ['attribute' => 'bodega_id', 'value' => 'bodega.bodega'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
