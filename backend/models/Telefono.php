<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Telefono".
 *
 * @property integer $id
 * @property integer $residente_id
 * @property string $tipo
 * @property string $telefono
 *
 * @property Residente $residente
 */
class Telefono extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Telefono';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id'], 'integer'],
            [['tipo', 'telefono'], 'string', 'max' => 255]
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
            'tipo' => 'Tipo',
            'telefono' => 'Telefono',
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
