<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Llamada".
 *
 * @property integer $id
 * @property integer $residente_id
 * @property string $nombre
 * @property string $telefono
 * @property string $mensaje
 *
 * @property Residente $residente
 */
class Llamada extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Llamada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id'], 'integer'],
            [['nombre', 'telefono','mensaje'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'residente_id' => 'Residente',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'mensaje' => 'Mensaje'
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
