<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteCondominio */

$this->title = 'Editar Residente Condominio: ' . ' ' . $model->residente_id;
$this->params['breadcrumbs'][] = ['label' => 'Residente Condominios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->residente_id, 'url' => ['view', 'residente_id' => $model->residente_id, 'condominio_id' => $model->condominio_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="residente-condominio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
