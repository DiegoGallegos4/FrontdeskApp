<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Llamada */

$this->title = 'Crear Llamada';
$this->params['breadcrumbs'][] = ['label' => 'Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="llamada-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
