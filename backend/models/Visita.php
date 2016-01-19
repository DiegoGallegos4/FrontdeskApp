<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Visita".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $identidad
 * @property string $tipo
 *
 * @property EventoVisita[] $eventoVisitas
 * @property Evento[] $eventos
 * @property ResidenteVisita[] $residenteVisitas
 * @property Residente[] $residentes
 */
class Visita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Visita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'identidad', 'tipo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'identidad' => 'Identidad',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoVisitas()
    {
        return $this->hasMany(EventoVisita::className(), ['visita_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventos()
    {
        return $this->hasMany(Evento::className(), ['id' => 'evento_id'])->viaTable('Evento_Visita', ['visita_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidenteVisitas()
    {
        return $this->hasMany(ResidenteVisita::className(), ['visita_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidentes()
    {
        return $this->hasMany(Residente::className(), ['id' => 'residente_id'])->viaTable('Residente_Visita', ['visita_id' => 'id']);
    }
}
