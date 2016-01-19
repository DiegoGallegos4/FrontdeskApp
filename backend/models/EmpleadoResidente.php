<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "EmpleadoResidente".
 *
 * @property integer $id
 * @property integer $residente_id
 * @property string $nombre
 * @property string $apellido
 * @property string $posicion
 * @property resource $imagen
 *
 * @property Residente $residente
 */
class EmpleadoResidente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'EmpleadoResidente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id'], 'integer'],
            [['imagen'], 'string'],
            [['nombre', 'apellido', 'posicion'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'residente_id' => 'Residente ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'posicion' => 'Posicion',
            'imagen' => 'Imagen',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente()
    {
        return $this->hasOne(Residente::className(), ['id' => 'residente_id']);
    }
}
