<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Paquete */

$this->title = 'Firma';
$this->params['breadcrumbs'][] = ['label' => 'Paquetes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paquete-signature">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php if($model->firma == NULL){?>
    <div class='signature-body'>
        <canvas id='myCanvas' height='300' width='600'/>
    </div>
    <div class='signature-footer'>
        <div class="note">Firme arriba</div>
        <button class='btn btn-info' data-action='clear'>Limpiar</button>
        <button class='btn btn-success' data-action='save'>Guardar</button>
    </div>
    <?php }else{ ?>
    <div>
        <?= Html::img('data:image/png;base64,'.$model->firma); ?>
    </div>
    <?php } ?>
</div>
