<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Paquete".
 *
 * @property integer $id
 * @property integer $residente_id
 * @property string $num_buzon
 * @property string $tipo
 * @property string $fecha
 * @property string $destino
 *
 * @property Residente $residente
 */
class Paquete extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Paquete';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id'], 'integer'],
            [['fecha'], 'safe'],
            [['num_buzon', 'tipo', 'destino'], 'string', 'max' => 255]
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
            'num_buzon' => 'Num Buzon',
            'tipo' => 'Tipo',
            'fecha' => 'Fecha',
            'destino' => 'Destino',
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
