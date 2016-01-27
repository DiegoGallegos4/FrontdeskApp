<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EventoVisita */

$this->title = 'Create Evento Visita';
$this->params['breadcrumbs'][] = ['label' => 'Evento Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-visita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
