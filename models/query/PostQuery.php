<?php

namespace app\models\query;

use app\models\Post;
use yii\db\ActiveQuery;

/**
 * Class PostQuery
 * @package app\models\query
 */
class PostQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function published()
    {
        $this->andWhere(['status' => Post::STATUS_PUBLISHED]);
        return $this;
    }
}
