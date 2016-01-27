<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ResidenteCondominioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Residente Condominios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-condominio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Residente Condominio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'residente_id',
            'condominio_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
