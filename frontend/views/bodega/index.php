<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Torre;
/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\BodegaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bodegas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bodega-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bodega', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'bodega',
            ['attribute' => 'torre_id', 'value' => 'torre.nombre'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
