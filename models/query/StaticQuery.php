<?php

namespace app\models\query;

use app\models\Post;
use app\models\StaticPage;
use yii\db\ActiveQuery;

/**
 * Class PostQuery
 * @package app\models\query
 */
class StaticQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function published()
    {
        $this->andWhere(['status' => StaticPage::STATUS_PUBLISHED]);
        return $this;
    }


}
