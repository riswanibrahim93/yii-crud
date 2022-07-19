<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TabelAlternatif;

/**
 * TabelAlternatifSearch represents the model behind the search form of `app\models\TabelAlternatif`.
 */
class TabelAlternatifSearch extends TabelAlternatif
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'flavor', 'body', 'sweetness', 'acidity', 'aftertaste', 'harga'], 'integer'],
            [['alternatif'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TabelAlternatif::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'flavor' => $this->flavor,
            'body' => $this->body,
            'sweetness' => $this->sweetness,
            'acidity' => $this->acidity,
            'aftertaste' => $this->aftertaste,
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'alternatif', $this->alternatif]);

        return $dataProvider;
    }
}
