<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Residente */

$this->title = 'Create Residente';
$this->params['breadcrumbs'][] = ['label' => 'Residentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
