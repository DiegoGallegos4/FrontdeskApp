<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Torre".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Bodega[] $bodegas
 * @property Parqueo[] $parqueos
 */
class Torre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Torre';
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
    public function getBodegas()
    {
        return $this->hasMany(Bodega::className(), ['torre_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParqueos()
    {
        return $this->hasMany(Parqueo::className(), ['residente_id' => 'id']);
    }
}
