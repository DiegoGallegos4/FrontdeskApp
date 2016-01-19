<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Residente_Visita".
 *
 * @property integer $residente_id
 * @property integer $visita_id
 *
 * @property Visita $visita
 * @property Residente $residente
 */
class ResidenteVisita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Residente_Visita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'visita_id'], 'required'],
            [['residente_id', 'visita_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'residente_id' => 'Residente ID',
            'visita_id' => 'Visita ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisita()
    {
        return $this->hasOne(Visita::className(), ['id' => 'visita_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente()
    {
        return $this->hasOne(Residente::className(), ['id' => 'residente_id']);
    }
}
