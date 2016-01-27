<?php

namespace frontend\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;

class ResidentesController extends ActiveController{
    public $modelClass = 'backend\models\Residente';
   
    public function init(){
        Yii::$app->response->format = Response::FORMAT_JSON;
    }
}
