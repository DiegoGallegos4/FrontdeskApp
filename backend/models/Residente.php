<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Residente".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $fecha_nacimiento
 * @property string $estado_civil
 * @property resource $imagen
 * @property string $nacionalidad
 * @property string $hobbies
 * @property string $empresa
 *
 * @property Bodega[] $bodegas
 * @property Email[] $emails
 * @property EmpleadoResidente[] $empleadoResidentes
 * @property Evento[] $eventos
 * @property Familiar[] $familiars
 * @property Llamada[] $llamadas
 * @property Nota[] $notas
 * @property Paquete[] $paquetes
 * @property Parqueo[] $parqueos
 * @property Preferencia[] $preferencias
 * @property ResidenteCondominio[] $residenteCondominios
 * @property Condominio[] $condominios
 * @property ResidenteVisita[] $residenteVisitas
 * @property Visita[] $visitas
 * @property Telefono[] $telefonos
 */
class Residente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Residente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_nacimiento'], 'safe'],
            [['imagen'], 'string'],
            [['nombre', 'apellido', 'estado_civil', 'nacionalidad', 'hobbies', 'empresa'], 'string', 'max' => 255]
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
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'estado_civil' => 'Estado Civil',
            'imagen' => 'Imagen',
            'nacionalidad' => 'Nacionalidad',
            'hobbies' => 'Hobbies',
            'empresa' => 'Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBodegas()
    {
        return $this->hasMany(Bodega::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails()
    {
        return $this->hasMany(Email::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleadoResidentes()
    {
        return $this->hasMany(EmpleadoResidente::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventos()
    {
        return $this->hasMany(Evento::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamiliars()
    {
        return $this->hasMany(Familiar::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLlamadas()
    {
        return $this->hasMany(Llamada::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotas()
    {
        return $this->hasMany(Nota::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaquetes()
    {
        return $this->hasMany(Paquete::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParqueos()
    {
        return $this->hasMany(Parqueo::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreferencias()
    {
        return $this->hasMany(Preferencia::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidenteCondominios()
    {
        return $this->hasMany(ResidenteCondominio::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCondominios()
    {
        return $this->hasMany(Condominio::className(), ['id' => 'condominio_id'])->viaTable('Residente_Condominio', ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResidenteVisitas()
    {
        return $this->hasMany(ResidenteVisita::className(), ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitas()
    {
        return $this->hasMany(Visita::className(), ['id' => 'visita_id'])->viaTable('Residente_Visita', ['residente_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTelefonos()
    {
        return $this->hasMany(Telefono::className(), ['residente_id' => 'id']);
    }
}
