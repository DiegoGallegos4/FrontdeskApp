<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Preferencia;

/**
 * PreferenciaSearch represents the model behind the search form about `backend\models\Preferencia`.
 */
class PreferenciaSearch extends Preferencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['residente_id','tipo_contacto', 'horario_contacto', 'contacto_emergencia', 'tipo_recepcion', 'apoyo_compras'], 'safe'],
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
        $query = Preferencia::find();

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
            'horario_contacto' => $this->horario_contacto,
        ]);
        
        $query->andFilterWhere(['like', 'tipo_contacto', $this->tipo_contacto])
            ->andFilterWhere(['like', 'contacto_emergencia', $this->contacto_emergencia])
            ->andFilterWhere(['like', 'tipo_recepcion', $this->tipo_recepcion])
            ->andFilterWhere(['like', 'apoyo_compras', $this->apoyo_compras])
            ->andFilterWhere(['like', 'Residente.nombre_completo', $this->residente_id])    ;

        return $dataProvider;
    }
}
