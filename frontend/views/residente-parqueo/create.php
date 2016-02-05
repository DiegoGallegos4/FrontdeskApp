<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteParqueo */

$this->title = 'Crear Parqueo';
$this->params['breadcrumbs'][] = ['label' => 'Residente Parqueos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-parqueo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
