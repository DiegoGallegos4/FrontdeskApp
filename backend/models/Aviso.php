<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Aviso".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $cuerpo
 * @property string $titulo
 *
 * @property User $user
 */
class Aviso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Aviso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['cuerpo', 'titulo'], 'string', 'max' => 255]
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
            'cuerpo' => 'Cuerpo',
            'titulo' => 'Titulo',
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
