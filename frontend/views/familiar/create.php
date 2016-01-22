<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Familiar */

$this->title = 'Create Familiar';
$this->params['breadcrumbs'][] = ['label' => 'Familiares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familiar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
