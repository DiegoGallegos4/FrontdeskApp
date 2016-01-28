<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<div class="site-index">
    
    <div class="col-xs-12 card-container">
        <div class="col-xs-12 col-sm-6 col-md-3">
            
          <a href="<?= Url::to('/residente')?>" class="thumbnail text-center">
              <i class="fa fa-users fa-2x"></i>
              <div class="card-title">Residente</div>  
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="<?= Url::to('/control-llave')?>" class="thumbnail text-center">
              <i class="fa fa-key fa-2x"></i>
              <div class="card-title" >Control de Llaves</div>  
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="<?= Url::to('/paquete')?>" class="thumbnail text-center">
              <i class="fa fa-dropbox fa-2x"></i>
              <div class="card-title" >Control de Paquetes</div> 
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="<?= Url::to('/evento')?>" class="thumbnail text-center">
            <i class="fa fa-calendar-o fa-2x"></i>
              <div class="card-title" >Reserva Eventos</div> 
          </a>
        </div>
    </div>
    
    <div class="col-xs-12 card-container">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="<?= Url::to('/visita')?>" class="thumbnail text-center">
            <i class="fa fa-automobile fa-2x"></i>
              <div class="card-title" >Control de Visitas</div> 
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="<?= Url::to('/llamada')?>" class="thumbnail text-center">
            <i class="fa fa-mobile-phone fa-2x"></i>
            <div class="card-title" >Control de Llamadas</div>  
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="<?= Url::to('/aviso')?>" class="thumbnail text-center">
           <i class="fa fa-warning fa-2x"></i>
           <div class="card-title">Avisos</div>   
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="#" class="thumbnail text-center">
           <i class="fa fa-file-text-o fa-2x"></i>
           <div class="card-title" >Reportes</div>
          </a>
        </div>
    </div>
    
</div>
