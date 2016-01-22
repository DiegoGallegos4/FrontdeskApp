<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Empleado".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 *
 * @property ControlLlave[] $controlLlaves
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getControlLlaves()
    {
        return $this->hasMany(ControlLlave::className(), ['empleado_id' => 'id']);
    }
}
