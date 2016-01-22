<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EmpleadoResidente;

/**
 * EmpleadoResidenteSearch represents the model behind the search form about `backend\models\EmpleadoResidente`.
 */
class EmpleadoResidenteSearch extends EmpleadoResidente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre', 'apellido', 'posicion', 'imagen', 'residente_id'], 'safe'],
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
        $query = EmpleadoResidente::find();

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

        $query->andFilterWhere(['like', 'EmpleadoResidente.nombre', $this->nombre])
            ->andFilterWhere(['like', 'EmpleadoResidente.apellido', $this->apellido])
            ->andFilterWhere(['like', 'posicion', $this->posicion])
            ->andFilterWhere(['like', 'Residente.nombre_completo', $this->residente_id]);

        return $dataProvider;
    }
}
