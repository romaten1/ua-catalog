<?php

namespace app\models\search;

use app\models\Category;
use app\models\CategorySecond;
use app\models\CategoryThird;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;
use yii\helpers\VarDumper;

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
     * @internal param null $manufacturer
     *
     * @internal param $category
     *
     * @return ActiveDataProvider
     */
    public function search( $params, $category_id, $type_category = null)
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

        if (isset( $type_category )) {
            switch ($type_category) {
                case 'second':
                    $ids = CategorySecond::getProductIds($category_id);
                    //VarDumper::dump( $ids ); die();
                    $query->andWhere( [ 'id' => $ids ] );
                    break;
                case 'first':
                    $ids = Category::getProductIds($category_id);
                    $query->andWhere( [ 'id' => $ids ] );
                    break;
                case 'third':
                    $ids = CategoryThird::getProductIds($category_id);
                    $query->andWhere( [ 'id' => $ids ] );
                    break;
                default:
                    break;
            }
        }



        $query->orderBy( $order_array );
        $dataProvider = new ActiveDataProvider( [
            'query' => $query,
            'pagination'=> ['defaultPageSize' => 9]
        ] );



        $this->load( $params );

        if ( ! $this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere( [
            //'category_id'     => $category_id,
            //'manufacturer_id' => $this->manufacturer_id,
            'created_at'      => $this->created_at,
        ] );
        $price = Yii::$app->request->queryParams['price'];
        //VarDumper::dump($price); die();
        if ($price) {
            $price = explode(',', $price);
            $query->andWhere(['between', 'price', $price[0], $price[1]]);
        }

        $type = Yii::$app->request->queryParams['categoryThird'];
        if ($type) {
            $query->andWhere(['in', 'category_id', array_keys($type)]);
        }

        $manufacturer = Yii::$app->request->queryParams['manufacturer'];
        if (is_array($manufacturer)) {
            $query->andWhere(['in', 'manufacturer_id', array_keys($manufacturer)]);
        }elseif($manufacturer){
            $query->andWhere(['manufacturer_id' => $manufacturer]);
        }
        $query->andFilterWhere( [ 'like', 'title', $this->title ] )
              ->andFilterWhere( [ 'like', 'image', $this->image ] );

        return $dataProvider;
    }
}
