<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Aviso */

$this->title = 'Create Aviso';
$this->params['breadcrumbs'][] = ['label' => 'Avisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aviso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
