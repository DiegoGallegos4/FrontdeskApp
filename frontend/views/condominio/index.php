<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\CondominioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Condominios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="condominio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Condominio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'condominio',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
