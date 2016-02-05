<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Condominio */

$this->title = 'Crear Condominio';
$this->params['breadcrumbs'][] = ['label' => 'Condominios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="condominio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
