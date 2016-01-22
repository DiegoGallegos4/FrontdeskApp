<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Evento;

/**
 * EventoSearch represents the model behind the search form about `backend\models\Evento`.
 */
class EventoSearch extends Evento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre_evento', 'fecha_inicio', 'fecha_fin', 'contrato','residente_id', 'area_id'], 'safe'],
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
        $query = Evento::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('residente')->joinWith('area');
        $query->andFilterWhere([
            'id' => $this->id,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
        ]);

        $query->andFilterWhere(['like', 'nombre_evento', $this->nombre_evento])
              ->andFilterWhere(['like', 'contrato', $this->contrato])
              ->andFilterWhere(['like', 'Residente.nombre_completo', $this->residente_id])  
              ->andFilterWhere(['like', 'AreaComun.nombre', $this->area_id]);

        return $dataProvider;
    }
}
