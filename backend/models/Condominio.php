<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Condominio".
 *
 * @property integer $id
 * @property string $condominio
 *
 * @property ResidenteCondominio[] $residenteCondominios
 * @property Residente[] $residentes
 */
class Condominio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Condominio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['condominio'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'condominio' => 'Condominio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidenteCondominios()
    {
        return $this->hasMany(ResidenteCondominio::className(), ['condominio_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidentes()
    {
        return $this->hasMany(Residente::className(), ['id' => 'residente_id'])->viaTable('Residente_Condominio', ['condominio_id' => 'id']);
    }
}
