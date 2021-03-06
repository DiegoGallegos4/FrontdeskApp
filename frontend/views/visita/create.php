<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Visita */

$this->title = 'Crear Visita a Evento';
$this->params['breadcrumbs'][] = ['label' => 'Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'EventoVisita' => $EventoVisita,
    ]) ?>

</div>
