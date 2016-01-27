<?php

namespace frontend\controllers;

use yii\rest\ActiveController;

class EmailsController extends ActiveController{
    public $modelClass = 'backend\models\Email';
}