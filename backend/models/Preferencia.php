<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Preferencia".
 *
 * @property integer $id
 * @property integer $residente_id
 * @property string $tipo_contacto
 * @property string $horario_contacto
 * @property string $contacto_emergencia
 * @property string $tipo_recepcion
 * @property string $apoyo_compras
 *
 * @property Residente $residente
 */
class Preferencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Preferencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id'], 'integer'],
            [['horario_contacto'], 'safe'],
            [['tipo_contacto', 'contacto_emergencia', 'tipo_recepcion', 'apoyo_compras'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'residente_id' => 'Residente ID',
            'tipo_contacto' => 'Tipo Contacto',
            'horario_contacto' => 'Horario Contacto',
            'contacto_emergencia' => 'Contacto Emergencia',
            'tipo_recepcion' => 'Tipo Recepcion',
            'apoyo_compras' => 'Apoyo Compras',
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
