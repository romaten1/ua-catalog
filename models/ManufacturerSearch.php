<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Manufacturer;

/**
 * ManufacturerSearch represents the model behind the search form about `app\models\Manufacturer`.
 */
class ManufacturerSearch extends Manufacturer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'image', 'site', 'updated_at', 'created_at', 'status'], 'integer'],
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
        $query = Manufacturer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'title' => $this->title,
            'image' => $this->image,
            'site' => $this->site,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
