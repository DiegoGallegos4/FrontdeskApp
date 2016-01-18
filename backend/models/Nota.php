<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Nota".
 *
 * @property integer $id
 * @property string $cuerpo
 * @property string $fecha_limite
 * @property integer $residente_id
 *
 * @property Residente $residente
 */
class Nota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Nota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_limite'], 'safe'],
            [['residente_id'], 'integer'],
            [['cuerpo'], 'string', 'max' => 255]
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
            'fecha_limite' => 'Fecha Limite',
            'residente_id' => 'Residente ID',
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
