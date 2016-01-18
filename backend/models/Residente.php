<?php

namespace app\models;

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
}
