<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "AreaComun".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
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
            [['nombre','descripcion'], 'string', 'max' => 255]
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
            'descripcion' => 'Descripcion',
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
