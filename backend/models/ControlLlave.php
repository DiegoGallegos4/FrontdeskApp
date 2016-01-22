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
 *
 * @property Empleado $empleado
 * @property Llave $id
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
            [['fecha_entrega', 'fecha_devolucion','llave_id', 'empleado_id'], 'safe'],
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
            'llave_id' => 'Llave',
            'empleado_id' => 'Empleado',
            'fecha_entrega' => 'Fecha Entrega',
            'fecha_devolucion' => 'Fecha Devolucion',
            'forma_autorizacion' => 'Forma Autorizacion',
            'observaciones' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(Empleado::className(), ['id' => 'empleado_id']);
    }
    
    public function getLlave(){
        return $this->hasOne(Llave::className(), ['id' => 'llave_id']);
    }
}
