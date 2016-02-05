<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Residente_Parqueo".
 *
 * @property integer $residente_id
 * @property integer $parqueo_id
 *
 * @property Parqueo $parqueo
 * @property Residente $residente
 */
class ResidenteParqueo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Residente_Parqueo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'parqueo_id'], 'required'],
            [['residente_id', 'parqueo_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'residente_id' => 'Residente',
            'parqueo_id' => 'Parqueo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParqueo()
    {
        return $this->hasOne(Parqueo::className(), ['id' => 'parqueo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente()
    {
        return $this->hasOne(Residente::className(), ['id' => 'residente_id']);
    }
}
