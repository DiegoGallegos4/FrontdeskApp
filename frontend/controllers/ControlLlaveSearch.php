<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ControlLlave;

/**
 * ControlLlaveSearch represents the model behind the search form about `backend\models\ControlLlave`.
 */
class ControlLlaveSearch extends ControlLlave
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'llave_id', 'empleado_id'], 'integer'],
            [['fecha_entrega', 'fecha_devolucion', 'forma_autorizacion', 'observaciones'], 'safe'],
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
        $query = ControlLlave::find();

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
            'llave_id' => $this->llave_id,
            'empleado_id' => $this->empleado_id,
            'fecha_entrega' => $this->fecha_entrega,
            'fecha_devolucion' => $this->fecha_devolucion,
        ]);

        $query->andFilterWhere(['like', 'forma_autorizacion', $this->forma_autorizacion])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
