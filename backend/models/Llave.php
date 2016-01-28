<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Llave".
 *
 * @property integer $id
 * @property string $lugar
 * @property integer $cantidad
 */
class Llave extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Llave';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cantidad','condo_id'], 'integer'],
            [['lugar'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lugar' => 'Lugar',
            'cantidad' => 'Cantidad',
            'condo_id' => 'Condominio',
        ];
    }
}
