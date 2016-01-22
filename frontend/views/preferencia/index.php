<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\PreferenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preferencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preferencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Preferencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'residente_id' ,'value' => 'residente.nombre_completo'],
            'tipo_contacto',
            'horario_contacto',
            'contacto_emergencia',
            // 'tipo_recepcion',
            // 'apoyo_compras',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
