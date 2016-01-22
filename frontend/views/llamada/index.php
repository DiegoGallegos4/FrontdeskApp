<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a('Create Llamada', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'residente_id','value' => 'residente.nombre_completo','label' => 'Residente'],
            'nombre',
            'telefono',
            'mensaje',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
