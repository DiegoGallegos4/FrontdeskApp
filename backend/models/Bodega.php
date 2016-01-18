<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Bodega".
 *
 * @property integer $id
 * @property string $bodega
 * @property integer $torre_id
 * @property integer $residente_id
 *
 * @property Torre $torre
 * @property Residente $residente
 */
class Bodega extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Bodega';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['torre_id', 'residente_id'], 'integer'],
            [['bodega'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bodega' => 'Bodega',
            'torre_id' => 'Torre ID',
            'residente_id' => 'Residente ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTorre()
    {
        return $this->hasOne(Torre::className(), ['id' => 'torre_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente()
    {
        return $this->hasOne(Residente::className(), ['id' => 'residente_id']);
    }
}
