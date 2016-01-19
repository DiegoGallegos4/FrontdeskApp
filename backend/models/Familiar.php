<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Familiar".
 *
 * @property integer $id
 * @property integer $residente_id
 * @property string $relacion
 * @property string $nombre
 * @property string $apellido
 *
 * @property Residente $residente
 */
class Familiar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Familiar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id'], 'integer'],
            [['relacion', 'nombre', 'apellido'], 'string', 'max' => 255]
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
            'relacion' => 'Relacion',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
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
