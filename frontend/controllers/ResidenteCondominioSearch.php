<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ResidenteCondominio;

/**
 * ResidenteCondominioSearch represents the model behind the search form about `backend\models\ResidenteCondominio`.
 */
class ResidenteCondominioSearch extends ResidenteCondominio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'condominio_id'], 'integer'],
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
        $query = ResidenteCondominio::find();

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
            'condominio_id' => $this->condominio_id,
        ]);

        return $dataProvider;
    }
}
