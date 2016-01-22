<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nota;

/**
 * NotaSearch represents the model behind the search form about `backend\models\Nota`.
 */
class NotaSearch extends Nota
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'residente_id'], 'integer'],
            [['cuerpo', 'fecha_limite'], 'safe'],
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
        $query = Nota::find();

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
            'id' => $this->id,
            'fecha_limite' => $this->fecha_limite,
            'residente_id' => $this->residente_id,
        ]);

        $query->andFilterWhere(['like', 'cuerpo', $this->cuerpo]);

        return $dataProvider;
    }
}
