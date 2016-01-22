<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ResidenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Residentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Residente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre_completo',
            'fecha_nacimiento',
            'estado_civil',
            // 'imagen',
            // 'nacionalidad',
            // 'hobbies',
            // 'empresa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
