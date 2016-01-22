<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Parqueo".
 *
 * @property integer $id
 * @property string $parqueo
 * @property integer $torre_id
 *
 * @property Torre $torre
 * @property ResidenteParqueo[] $residenteParqueos
 * @property Residente[] $residentes
 */
class Parqueo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Parqueo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['torre_id'], 'integer'],
            [['parqueo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parqueo' => 'Parqueo',
            'torre_id' => 'Torre ID',
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
    public function getResidenteParqueos()
    {
        return $this->hasMany(ResidenteParqueo::className(), ['parqueo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidentes()
    {
        return $this->hasMany(Residente::className(), ['id' => 'residente_id'])->viaTable('Residente_Parqueo', ['parqueo_id' => 'id']);
    }
}
