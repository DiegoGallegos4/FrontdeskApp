<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Aviso".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $cuerpo
 * @property string $titulo
 *
 * @property User $user
 */
class Aviso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Aviso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cuerpo', 'titulo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cuerpo' => 'Cuerpo',
            'titulo' => 'Titulo',
        ];
    }

}
