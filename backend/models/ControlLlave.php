<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ControlLlave".
 *
 * @property integer $id
 * @property integer $llave_id
 * @property integer $empleado_id
 * @property string $fecha_entrega
 * @property string $fecha_devolucion
 * @property string $forma_autorizacion
 * @property string $observaciones
 */
class ControlLlave extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ControlLlave';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['llave_id', 'empleado_id'], 'integer'],
            [['fecha_entrega', 'fecha_devolucion'], 'safe'],
            [['forma_autorizacion', 'observaciones'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'llave_id' => 'Llave ID',
            'empleado_id' => 'Empleado ID',
            'fecha_entrega' => 'Fecha Entrega',
            'fecha_devolucion' => 'Fecha Devolucion',
            'forma_autorizacion' => 'Forma Autorizacion',
            'observaciones' => 'Observaciones',
        ];
    }
}
