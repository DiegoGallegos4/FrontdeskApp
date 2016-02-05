<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Condominio;

/**
 * CondominioSearch represents the model behind the search form about `backend\models\Condominio`.
 */
class CondominioSearch extends Condominio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['condominio'], 'safe'],
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
        $query = Condominio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('residentes');
        
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'condominio', $this->condominio]);

        return $dataProvider;
    }
}
