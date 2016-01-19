<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "AreaComun".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Evento[] $eventos
 */
class AreaComun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'AreaComun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 255]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventos()
    {
        return $this->hasMany(Evento::className(), ['area_id' => 'id']);
    }
}
