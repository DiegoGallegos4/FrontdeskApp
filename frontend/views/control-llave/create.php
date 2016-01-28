<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ControlLlave */

$this->title = 'Prestamo de Llave';
$this->params['breadcrumbs'][] = ['label' => 'Control Llaves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-llave-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
