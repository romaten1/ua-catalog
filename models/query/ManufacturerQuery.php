<?php

namespace app\models\query;

use app\models\Manufacturer;
use yii\db\ActiveQuery;

/**
 * Class PostQuery
 * @package app\models\query
 */
class ManufacturerQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function published()
    {
        $this->andWhere(['status' => Manufacturer::STATUS_PUBLISHED]);
        return $this;
    }

}
