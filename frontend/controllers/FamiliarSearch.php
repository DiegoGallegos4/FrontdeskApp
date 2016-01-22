<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Familiar;

/**
 * FamiliarSearch represents the model behind the search form about `backend\models\Familiar`.
 */
class FamiliarSearch extends Familiar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', ], 'integer'],
            [['relacion', 'nombre', 'apellido','residente_id'], 'safe'],
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
        $query = Familiar::find();

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
        ]);

        $query->andFilterWhere(['like', 'relacion', $this->relacion])
              ->andFilterWhere(['like', 'Familiar.nombre', $this->nombre])
              ->andFilterWhere(['like', 'Familiar.apellido', $this->apellido])
              ->andFilterWhere(['like', 'Residente.nombre_completo', $this->residente_id])  ;

        return $dataProvider;
    }
}
