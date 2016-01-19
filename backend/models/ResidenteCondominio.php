<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Residente_Condominio".
 *
 * @property integer $residente_id
 * @property integer $condominio_id
 *
 * @property Condominio $condominio
 * @property Residente $residente
 */
class ResidenteCondominio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Residente_Condominio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'condominio_id'], 'required'],
            [['residente_id', 'condominio_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'residente_id' => 'Residente ID',
            'condominio_id' => 'Condominio ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCondominio()
    {
        return $this->hasOne(Condominio::className(), ['id' => 'condominio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente()
    {
        return $this->hasOne(Residente::className(), ['id' => 'residente_id']);
    }
}
