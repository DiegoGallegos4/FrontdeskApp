<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ResidenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cumpleaños';
$this->params['breadcrumbs'][] = ['label' => 'Residentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?php Pjax::begin() ?>
    <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
        'ajaxEvents'=> Url::to(['/residente/json-birthday']),
        'options' => [
            'lang' => 'es',
        ]
    )); ?>
    <?php Pjax::end() ?>
    
    
</div>

