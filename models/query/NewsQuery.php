<?php

namespace app\models\query;

use app\models\News;
use yii\db\ActiveQuery;

/**
 * Class PostQuery
 * @package app\models\query
 */
class NewsQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function published()
    {
        $this->andWhere(['status' => News::STATUS_PUBLISHED]);
        return $this;
    }
}
