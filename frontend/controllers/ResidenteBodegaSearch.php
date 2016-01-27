<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ResidenteBodega;

/**
 * ResidenteBodegaSearch represents the model behind the search form about `backend\models\ResidenteBodega`.
 */
class ResidenteBodegaSearch extends ResidenteBodega
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['residente_id', 'bodega_id'], 'safe']
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
        $query = ResidenteBodega::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('bodega')->joinWith('residente');
        $query->andFilterWhere(['like','Residente.nombre_completo',$this->residente_id])
              ->andFilterWhere(['like','Bodega.bodega', $this->bodega_id]);  

        return $dataProvider;
    }
}
