<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Evento_Visita".
 *
 * @property integer $evento_id
 * @property integer $visita_id
 * @property datetime $hora_entrada
 * @property datetime $hora_salida
 * 
 * @property Visita $visita
 * @property Evento $evento
 */
class EventoVisita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Evento_Visita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['evento_id', 'visita_id','hora_entrada','hora_salida'], 'required'],
            [['evento_id', 'visita_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'evento_id' => 'Evento',
            'visita_id' => 'Visita',
            'hora_entrada' => 'Hora Entrada',
            'hora_salida' => 'Hora Salida'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisita()
    {
        return $this->hasOne(Visita::className(), ['id' => 'visita_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvento()
    {
        return $this->hasOne(Evento::className(), ['id' => 'evento_id']);
    }
}
