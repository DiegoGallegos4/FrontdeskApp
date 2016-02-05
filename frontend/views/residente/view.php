<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model backend\models\Residente */

$this->title = $model->nombre_completo;
$this->params['breadcrumbs'][] = ['label' => 'Residentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="residente-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Bodega', ['/bodega/create'], ['class' => 'btn btn-info update']) ?>
        <?= Html::a('Parqueo', ['/parqueo/create'], ['class' => 'btn btn-info update']) ?>
        <?= Html::a('Condominio', ['/condominio/create'], ['class' => 'btn btn-info update']) ?>
    </p>
    
    <?php
        Modal::begin([
            'id' => 'modalCrear'
        ]);

        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>
    
    <?php Pjax::begin() ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'group'=>true,
                'label'=>'Informacion General',
                'rowOptions'=>['class'=>'info']
            ],
            [
                'columns' => [
                    [
                        'attribute'=>'id', 
                        'displayOnly'=>true,
                        'valueColOptions'=>['style'=>'width:30%']
                    ],
                    [
                        'attribute'=>'nombre_completo', 
                        'displayOnly'=>true,
                        'valueColOptions'=>['style'=>'width:30%']
                    ], 
                ],
            ],
            [
                'columns' => [
                    [
                        'attribute'=>'fecha_nacimiento', 
                        'displayOnly'=>true,
                        'valueColOptions'=>['style'=>'width:30%']
                    ],
                    [
                        'attribute'=>'estado_civil', 
                        'displayOnly'=>true,
                        'valueColOptions'=>['style'=>'width:30%']
                    ], 
                ],
            ],
            [
                'columns' => [
                    [
                        'attribute'=>'nacionalidad', 
                        'displayOnly'=>true,
                        'valueColOptions'=>['style'=>'width:30%']
                    ],
                    [
                        'attribute'=>'empresa', 
                        'displayOnly'=>true,
                        'valueColOptions'=>['style'=>'width:30%']
                    ], 
                ],
            ],
            [
                'group'=>true,
                'label'=>'Informacion Personal',
                'rowOptions'=>['class'=>'info']
            ],
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'relacion',
                                    [
                                       'attribute' => 'nombre',
                                       'value' => function($model){ 
                                            return Html::a($model->nombre.' '.$model->apellido,'/familiar/update/'.$model->id,['class' =>'update']);
                                        },
                                        'format' => 'raw',
                                    ],
                                ],
                            ]);
                        },$familiares),
                        'label' => 'Familiar |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/familiar/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'posicion',
                                    [
                                       'attribute' => 'nombre',
                                       'value' => function($model){ 
                                            return Html::a($model->nombre.' '.$model->apellido,'/empleado-residente/update/'.$model->id,['class' =>'update']);
                                        },
                                        'format' => 'raw',
                                    ],
                                ],
                            ]);
                        },$empleadosResidentes),
                        'label' => 'Empleados |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/empleado-residente/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],
            [
                'group'=>true,
                'label'=>'Contacto',
                'rowOptions'=>['class'=>'info']
            ],
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($telefonos){ 
                            return  GridView::widget([
                                'dataProvider' => $telefonos,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'tipo',
                                    [
                                       'attribute' => 'telefono',
                                       'value' => function($model,$key,$index,$column){ 
                                            return Html::a($model->telefono,'/telefono/update/'.$model->id,['class' =>'update']);
                                        },
                                        'format' => 'raw',
                                    ],
                                ],
                            ]);
                        },$telefonos),
                        'label' => 'Telefonos |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/telefono/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'tipo',
                                    [
                                       'attribute' => 'email',
                                       'value' => function($model){ 
                                            return Html::a($model->email,'/email/update/'.$model->id,['class' =>'update']);
                                        },
                                        'format' => 'raw',
                                    ],
                                ],
                            ]);
                        },$emails),
                        'label' => 'Correos |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/email/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],
            [
                'group'=>true,
                'label'=>'Propiedades',
                'rowOptions'=>['class'=>'info']
            ],                    
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'torre.nombre',
                                    [
                                       'attribute' => 'parqueo',
                                       'value' => function($model){ 
                                            return Html::a($model->parqueo,'/parqueo/update/'.$model->id,['class' =>'update']);
                                        },
                                        'format' => 'raw',
                                    ],
                                ],
                            ]);
                        },$parqueos),
                        'label' => 'Parqueos |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/residente-parqueo/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'torre.nombre',
                                    [
                                       'attribute' => 'bodega',
                                       'value' => function($model){ 
                                            return Html::a($model->bodega,'/bodega/update/'.$model->id,['class' =>'update']);
                                        },
                                        'format' => 'raw',
                                    ],
                                ],
                            ]);
                        },$bodegas),
                        'label' => 'Bodegas |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/residente-bodega/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ], 
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    [
                                       'attribute' => 'condominio',
                                       'value' => function($model){ 
                                            return Html::a($model->condominio,'/condominio/update/'.$model->id,['class' =>'update']);
                                        },
                                        'format' => 'raw',
                                    ],
                                ],
                            ]);
                        },$condominios),
                        'label' => 'Condominios |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/residente-condominio/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],
            [
                'group'=>true,
                'label'=>'Servicios',
                'rowOptions'=>['class'=>'info']
            ],   
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'fecha',
                                    'entregado_por',
                                    'observaciones',
                                ],
                            ]);
                        },$paquetes),
                        'label' => 'Paquetes |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/paquete/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'telefono',
                                    'nombre',
                                ],
                            ]);
                        },$llamadas),
                        'label' => 'Llamadas |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/llamada/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],
            [
                'columns' => [
                    [
                        'value'=>  call_user_func(function($model){ 
                            return  GridView::widget([
                                'dataProvider' => $model,
                                'showHeader' => false,
                                'summary' => '',
                                'columns' => [
                                    'nombre_evento',
                                ],
                            ]);
                        },$eventos),
                        'label' => 'Eventos |'.Html::a('<span class="glyphicon glyphicon-plus-sign"></span','/evento/create',['class' => 'update']),
                        'format' => 'raw',
                    ],
                ],
            ],                    
        ]         
    ]) 
        
        ?>
    <?php Pjax::end() ?>
    
    

</div>
