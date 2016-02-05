<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Llamada */

$this->title = 'Editar Llamada: ' . ' ' . $model->residente->nombre_completo;
$this->params['breadcrumbs'][] = ['label' => 'Llamadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="llamada-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
