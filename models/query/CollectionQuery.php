<?php

namespace app\models\query;

use Yii;
use yii\db\ActiveQuery;

/**
 * Class PostQuery
 * @package app\models\query
 */
class CollectionQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function owner()
    {
        $this->andWhere(['user_id' => Yii::$app->user->id]);
        return $this;
    }
}
