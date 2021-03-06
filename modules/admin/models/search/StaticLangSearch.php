<?php

namespace app\modules\admin\models\search;

use app\modules\admin\models\StaticLang;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * StaticLangSearch represents the model behind the search form about `app\models\StaticLang`.
 */
class StaticLangSearch extends StaticLang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'static_id', 'lang_id'], 'integer'],
            [['title', 'text'], 'safe'],
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
        $query = StaticLang::find();

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
            'static_id' => $this->static_id,
            'lang_id' => $this->lang_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
