<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Parqueo".
 *
 * @property integer $id
 * @property string $parqueo
 * @property integer $torre_id
 * @property integer $residente_id
 *
 * @property Torre $residente
 * @property Residente $residente0
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
            [['torre_id', 'residente_id'], 'integer'],
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
            'residente_id' => 'Residente ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente()
    {
        return $this->hasOne(Torre::className(), ['id' => 'residente_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente0()
    {
        return $this->hasOne(Residente::className(), ['id' => 'residente_id']);
    }
}
