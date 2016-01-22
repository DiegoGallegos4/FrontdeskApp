<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Parqueo */

$this->title = 'Create Parqueo';
$this->params['breadcrumbs'][] = ['label' => 'Parqueos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parqueo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
