<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Bodega".
 *
 * @property integer $id
 * @property string $bodega
 * @property integer $torre_id
 *
 * @property Torre $torre
 * @property ResidenteBodega[] $residenteBodegas
 * @property Residente[] $residentes
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
            [['torre_id'], 'integer'],
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
            'torre_id' => 'Torre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidenteBodegas()
    {
        return $this->hasMany(ResidenteBodega::className(), ['bodega_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidentes()
    {
        return $this->hasMany(Residente::className(), ['id' => 'residente_id'])->viaTable('Residente_Bodega', ['bodega_id' => 'id']);
    }
    
    public function getTorre() {
        return $this->hasOne(Torre::className(), ['id' => 'torre_id']);
    }
}
