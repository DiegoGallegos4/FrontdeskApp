<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Paquete;

/**
 * PaqueteSearch represents the model behind the search form about `backend\models\Paquete`.
 */
class PaqueteSearch extends Paquete
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id',], 'integer'],
            [['num_buzon', 'fecha', 'entregado_por','observaciones','residente_id'], 'safe'],
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
        $query = Paquete::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('residente');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'num_buzon', $this->num_buzon])
              ->andFilterWhere(['like', 'entregado_por', $this->entregado_por])
              ->andFilterWhere(['like', 'Residente.nombre_completo', $this->residente_id]);

        return $dataProvider;
    }
}
