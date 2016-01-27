<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ResidenteCondominio */

$this->title = 'Create Residente Condominio';
$this->params['breadcrumbs'][] = ['label' => 'Residente Condominios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="residente-condominio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
