<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ResidenteParqueo;

/**
 * ResidenteParqueoSearch represents the model behind the search form about `backend\models\ResidenteParqueo`.
 */
class ResidenteParqueoSearch extends ResidenteParqueo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'parqueo_id'], 'integer'],
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
        $query = ResidenteParqueo::find();

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
            'parqueo_id' => $this->parqueo_id,
        ]);

        return $dataProvider;
    }
}
