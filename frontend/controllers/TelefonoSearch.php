<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Telefono;

/**
 * TelefonoSearch represents the model behind the search form about `backend\models\Telefono`.
 */
class TelefonoSearch extends Telefono
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tipo', 'telefono', 'residente_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Telefono::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('residente')
              ->andFilterWhere(['id' => $this->id])
              ->andFilterWhere(['like', 'tipo', $this->tipo])
              ->andFilterWhere(['like', 'telefono', $this->telefono])
              ->andFilterWhere(['like','Residente.nombre_completo', $this->residente_id]);  

        return $dataProvider;
    }
}
