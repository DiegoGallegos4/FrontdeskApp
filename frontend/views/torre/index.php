<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\TorreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Torres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="torre-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Torre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

