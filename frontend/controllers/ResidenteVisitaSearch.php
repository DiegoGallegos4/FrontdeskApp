<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ResidenteVisita;

/**
 * ResidenteVisitaSearch represents the model behind the search form about `backend\models\ResidenteVisita`.
 */
class ResidenteVisitaSearch extends ResidenteVisita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'visita_id'], 'integer'],
            [['hora_entrada', 'hora_salida'], 'safe'],
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
        $query = ResidenteVisita::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'residente_id' => $this->residente_id,
            'visita_id' => $this->visita_id,
            'hora_entrada' => $this->hora_entrada,
            'hora_salida' => $this->hora_salida,
        ]);

        return $dataProvider;
    }
}
