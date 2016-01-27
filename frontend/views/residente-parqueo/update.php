<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteParqueo */

$this->title = 'Update Residente Parqueo: ' . ' ' . $model->residente_id;
$this->params['breadcrumbs'][] = ['label' => 'Residente Parqueos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->residente_id, 'url' => ['view', 'residente_id' => $model->residente_id, 'parqueo_id' => $model->parqueo_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="residente-parqueo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
