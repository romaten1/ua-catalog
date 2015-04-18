<?php

namespace app\models\query;

use app\models\Post;
use app\models\Product;
use yii\db\ActiveQuery;

/**
 * Class PostQuery
 * @package app\models\query
 */
class ProductQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function published()
    {
        $this->andWhere(['status' => Product::STATUS_PUBLISHED]);
        return $this;
    }
}
