<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Residente_Bodega".
 *
 * @property integer $residente_id
 * @property integer $bodega_id
 *
 * @property Bodega $bodega
 * @property Residente $residente
 */
class ResidenteBodega extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Residente_Bodega';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'bodega_id'], 'required'],
            [['residente_id', 'bodega_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'residente_id' => 'Residente ID',
            'bodega_id' => 'Bodega ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBodega()
    {
        return $this->hasOne(Bodega::className(), ['id' => 'bodega_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente()
    {
        return $this->hasOne(Residente::className(), ['id' => 'residente_id']);
    }
}
