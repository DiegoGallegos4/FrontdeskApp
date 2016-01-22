<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AreaComun */

$this->title = 'Update Area Comun: ' . ' ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Area Comuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="area-comun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
