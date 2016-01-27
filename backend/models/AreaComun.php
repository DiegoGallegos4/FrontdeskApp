<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "AreaComun".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $torre_id
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
            [['nombre','descripcion'], 'string', 'max' => 255],
            ['torre_id','integer']
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
            'torre_id' => 'Torre'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventos()
    {
        return $this->hasMany(Evento::className(), ['area_id' => 'id']);
    }
    
    public function getTorre(){
        return $this->hasOne(Torre::className(), ['id' => 'torre_id']);
    }
}
