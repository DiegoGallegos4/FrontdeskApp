<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AreaComun */

$this->title = 'Create Area Comun';
$this->params['breadcrumbs'][] = ['label' => 'Areas Comunes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-comun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
