<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Bodega */

$this->title = 'Create Bodega';
$this->params['breadcrumbs'][] = ['label' => 'Bodegas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bodega-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>