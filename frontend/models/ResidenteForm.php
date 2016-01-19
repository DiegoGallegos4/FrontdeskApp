<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace frontend\models;

use yii\base\Model;

class ResidenteForm extends Model{
    public $nombre;
    public $apellido;
    public $fecha_nacimiento;
    public $estado_civil;
    public $hobbies;
    public $empresa;
    
    public function rules(){
        return [
            [['nombre','apellido','fecha_nacimiento','estado_civil','hobbies','empresa'],'safe'],
        ];
    }
}

