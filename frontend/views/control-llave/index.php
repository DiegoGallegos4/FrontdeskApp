<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ControlLlaveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Control Llaves';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-llave-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Control Llave', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
