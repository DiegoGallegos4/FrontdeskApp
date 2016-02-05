<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;   

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
        <?= Html::button('Crear Residente', ['class' => 'btn btn-success', 'id' => 'modalButtonCrear','value' => Url::to('/residente/create') ]) ?>
        <?= Html::a('Cumpleaños', ['calendar'],['class' => 'btn btn-info']) ?>
    </p>
    
    <p id="success-create" class="bg-success text-center">Residente creado Exitosamente</p> 

    <?php 
        Modal::begin([
            'id' => 'modalCrear',
        ]);

        echo '<div id="modalContent"></div>';
        Modal::end();
    ?>
    
    <div>
    <?php Pjax::begin(); ?>
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

                ['class' => 'yii\grid\ActionColumn',
                 'buttons' => [
                     'update' => function($url,$model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',$url,['class' => 'update']);
                     }, 
                    ]
                ],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
     </div>

</div>
