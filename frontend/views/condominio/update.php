<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Condominio */

$this->title = 'Update Condominio: ' . ' ' . $model->condominio;
$this->params['breadcrumbs'][] = ['label' => 'Condominios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="condominio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
