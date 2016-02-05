<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\EventoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Crear Evento',['class' => 'btn btn-success', 
                                    'id' => 'modalButtonCrear', 'value' => Url::to('/evento/create')]) ?>
    </p>
    
    <?php
        Modal::begin([
            'id' => 'modalCrear'
        ]);
        
        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>
    
    <?php Pjax::begin() ?>
    <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
        //'ajaxEvents'=> Url::to(['/evento/json-events']),
        'options' => [
            'lang' => 'es',
        ]
    )); ?>
    <?php Pjax::end() ?>
    

</div>
