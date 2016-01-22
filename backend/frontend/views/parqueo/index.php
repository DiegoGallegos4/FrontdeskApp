<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ParqueoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parqueos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parqueo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Parqueo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parqueo',
            'torre_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
