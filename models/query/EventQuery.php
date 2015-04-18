<?php

namespace app\models\query;


use app\models\Event;
use yii\db\ActiveQuery;

/**
 * Class PostQuery
 * @package app\models\query
 */
class EventQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function published()
    {
        $this->andWhere(['status' => Event::STATUS_PUBLISHED]);
        return $this;
    }


}
