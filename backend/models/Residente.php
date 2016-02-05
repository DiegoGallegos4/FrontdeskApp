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
 * @property string $nombre_completo
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
            [['nombre', 'apellido', 'estado_civil', 'nacionalidad', 'hobbies', 'empresa','nombre_completo'], 'string', 'max' => 255],
            [['nombre', 'apellido', 'estado_civil', 'nacionalidad', 'hobbies', 'empresa','nombre_completo'], 'required'],
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
            'nombre_completo' => 'Nombre Completo',
        ];
    }

    public function getResidenteBodegas(){
        return $this->hasMany(ResidenteBodega::className(), ['residente_id' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBodegas()
    {
        $arr_bodegas = $this->hasMany(Bodega::className(), ['id' => 'bodega_id'])->viaTable('Residente_Bodega', ['residente_id'=>'id'])->select(['*'])->asArray()->all();   
        $bodegas = '';
        foreach ($arr_bodegas as $bodega) {
            $bodegas .= $bodega['bodega'].'<br>';
        }
        return $bodegas;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails()
    {
        $arr_emails = $this->hasMany(Email::className(), ['residente_id' => 'id'])->select(['*'])->asArray()->all();
        $emails = '';
        foreach ($arr_emails as $email) {
            $emails .= $email['tipo'].': '.$email['email'].'<br>';
        }
        return $emails;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleadoResidentes()
    {
        $arr_empleados = $this->hasMany(EmpleadoResidente::className(), ['residente_id' => 'id'])->select(['*'])->asArray()->all();
        $empleados = '';
        foreach ($arr_empleados as $empleado) {
            $empleados .= $empleado['posicion'].': '.$empleado['nombre'].' '.$empleado['apellido'].'<br>';
        }
        return $empleados;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventos()
    {
        $arr_eventos = $this->hasMany(Evento::className(), ['residente_id' => 'id'])->select(['*'])->asArray()->all();
        $eventos = '';
        foreach ($arr_eventos as $evento) {
            $eventos .= $evento['nombre_evento'].'<br>';
        }
        return $eventos;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamiliares()
    {
        $arr_familiares = $this->hasMany(Familiar::className(), ['residente_id' => 'id'])->select(['*'])->asArray()->all();
        $familiares = '';
        foreach ($arr_familiares as $familiar) {
            $familiares .= $familiar['relacion'].': '.$familiar['nombre'].' '.$familiar['apellido'].'<br>';
        }
        return $familiares;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLlamadas()
    {
        $arr_llamadas = $this->hasMany(Llamada::className(), ['residente_id' => 'id'])->select(['*'])->asArray()->all();
        $llamadas = '';
        foreach ($arr_llamadas as $llamada) {
            $llamadas .= $llamada['relacion'].': '.$llamada['nombre'].' '.$llamada['apellido'].'<br>';
        }
        return $llamadas;
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
    
    public function getResidenteParqueos(){
        return $this->hasMany(ResidenteParqueo::className(),['residente_id' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParqueos()
    {
        $arr_parqueo = $this->hasMany(Parqueo::className(), ['id' => 'parqueo_id'])->viaTable('Residente_Parqueo', ['residente_id' => 'id'])->select(['*'])->asArray()->all();
        $parqueos = '';
        foreach ($arr_parqueo as $parqueo) {
            $parqueos .= $parqueo['parqueo'].'<br>';
        }
        return $parqueos;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreferencias()
    {
        $arr_pref = $this->hasMany(Preferencia::className(), ['residente_id' => 'id'])->select(['*'])->asArray()->all();
        $prefs = '';
        foreach($arr_pref as $pref){
            $prefs.= '<b>Contactarlo por: </b>'.$pref['tipo_contacto'].'<br>'.'<b>Horario para contactarlo: </b>'.$pref['horario_contacto'].'<br>'.'<b>Contacto emergencia: </b>'.$pref['contacto_emergencia'].'<br>'.
                    '<b>Enviar paquetes a: </b>'.$pref['tipo_recepcion'].'<br>'.'<b>Apoyo para compras o bolsas: </b>'.$pref['apoyo_compras'];
        }
        return $prefs;
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
        $arr_condominios = $this->hasMany(Condominio::className(), ['id' => 'condominio_id'])->viaTable('Residente_Condominio', ['residente_id' => 'id'])->select(['*'])->asArray()->all();
        $condominios = '';
        foreach ($arr_condominios as $condominio) {
            $condominios .= $condominio['condominio'].'<br>';
        }
        return $condominios;
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
        $telefonos=$this->hasMany(Telefono::className(), ['residente_id' => 'id'])->select(['*'])->asArray()->all();
             
        $n_telefonos='';
        foreach($telefonos as $telefono) {
           $n_telefonos.= '<div><a href="/telefono/'.$telefono['id'].'">'.$telefono['tipo'].' : '.$telefono['telefono'].'</a></div>';
        }

        return $n_telefonos;
    }
}
