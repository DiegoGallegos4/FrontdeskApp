<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Parqueo */

$this->title = 'Editar Parqueo: ' . ' ' . $model->parqueo;
$this->params['breadcrumbs'][] = ['label' => 'Parqueos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parqueo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
