<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\EmpleadoResidenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empleado Residente';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleado-residente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Empleado Residente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'residente_id','value' =>'residente.nombre_completo'],
            'nombre',
            'apellido',
            'posicion',
            // 'imagen',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
