<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Llave".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $lugar_llave
 * @property string $recipiente
 * @property string $fecha_entrega
 * @property string $fecha_devolucion
 * @property string $forma_autorizacion
 * @property string $observaciones
 *
 * @property User $user
 */
class Llave extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Llave';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['fecha_entrega', 'fecha_devolucion'], 'safe'],
            [['lugar_llave', 'recipiente', 'forma_autorizacion', 'observaciones'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'lugar_llave' => 'Lugar Llave',
            'recipiente' => 'Recipiente',
            'fecha_entrega' => 'Fecha Entrega',
            'fecha_devolucion' => 'Fecha Devolucion',
            'forma_autorizacion' => 'Forma Autorizacion',
            'observaciones' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
