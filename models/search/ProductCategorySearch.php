<?php

namespace app\models\search;

use app\models\CategoryThird;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductCategorySearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ [ 'id', 'category_id', 'manufacturer_id', 'updated_at', 'created_at', 'status' ], 'integer' ],
            [ [ 'title', 'image' ], 'safe' ],
            [ [ 'price' ], 'number' ],
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
     * @param $params
     * @param $category_id
     * @param $type_category
     *
     * @internal param $category
     *
     * @return ActiveDataProvider
     */
    public function search( $params, $category_id, $type_category )
    {
        $order_array = [ ];
        if (isset( Yii::$app->request->queryParams['filter'] )) {
            $filter = Yii::$app->request->queryParams['filter'];
            switch ($filter) {
                case 'date':
                    $order_array['updated_at'] = SORT_DESC;
                    break;
                case 'price-up':
                    $order_array['price'] = SORT_ASC;
                    break;
                case 'price-down':
                    $order_array['price'] = SORT_DESC;
                    break;
                default:
                    $order_array['updated_at'] = SORT_DESC;
            }
        }

        $query = Product::find()->published();
        $query->orderBy( $order_array );
        $dataProvider = new ActiveDataProvider( [
            'query' => $query,
        ] );

        $this->load( $params );

        if ( ! $this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere( [
            'category_id'     => $category_id,
            'manufacturer_id' => $this->manufacturer_id,
            'created_at'      => $this->created_at,
        ] );
        if ($type_category == 'second') {
            $array = CategoryThird::find()->where(['parent_id' => $category_id])->asArray()->all();
            foreach($array as $item){
                $query->andFilterWhere( [ 'category_id' => $item['id'] ] );
            }

        }
        if (Yii::$app->request->queryParams['filter']) {

        }
        $query->andFilterWhere( [ 'like', 'title', $this->title ] )
              ->andFilterWhere( [ 'like', 'image', $this->image ] );

        return $dataProvider;
    }
}
