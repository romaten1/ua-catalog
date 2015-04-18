<?php

namespace app\modules\admin\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Attachments;

/**
 * AttachmentsSearch represents the model behind the search form about `app\modules\admin\models\Attachments`.
 */
class AttachmentsSearch extends Attachments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'created_at'], 'integer'],
            [['image'], 'safe'],
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
        $query = Attachments::find();
        $query->orderBy([
            'created_at' => SORT_DESC,
        ]);
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
            'product_id' => $this->product_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
