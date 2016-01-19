<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Evento".
 *
 * @property integer $id
 * @property integer $residente_id
 * @property string $nombre_evento
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property resource $contrato
 * @property integer $area_id
 *
 * @property AreaComun $area
 * @property Residente $residente
 * @property EventoVisita[] $eventoVisitas
 * @property Visita[] $visitas
 */
class Evento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Evento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'area_id'], 'integer'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['contrato'], 'string'],
            [['nombre_evento'], 'string', 'max' => 255]
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
            'nombre_evento' => 'Nombre Evento',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'contrato' => 'Contrato',
            'area_id' => 'Area ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArea()
    {
        return $this->hasOne(AreaComun::className(), ['id' => 'area_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidente()
    {
        return $this->hasOne(Residente::className(), ['id' => 'residente_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoVisitas()
    {
        return $this->hasMany(EventoVisita::className(), ['evento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitas()
    {
        return $this->hasMany(Visita::className(), ['id' => 'visita_id'])->viaTable('Evento_Visita', ['evento_id' => 'id']);
    }
}
