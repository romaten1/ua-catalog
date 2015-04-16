<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the root model class with "active" methods and constants.
 *
 *
 */
class Root extends ActiveRecord
{
    const STATUS_PUBLISHED = 1;
    const STATUS_DRAFT = 0;

    /**
     * @return array
     */
    public static function getStatusArray()
    {
        return [
            self::STATUS_PUBLISHED => 'Опубліковано',
            self::STATUS_DRAFT => 'Чорновик',
        ];
    }

    /**
     * @return string
     */
    public function getStatusLabel()
    {
        $statuses = $this->getStatusArray();
        if($this->status == self::STATUS_PUBLISHED ){
            $return = '<span class="label label-success">'.ArrayHelper::getValue($statuses, $this->status).'</span>';
        }
        else {
            $return = '<span class="label label-warning">'.ArrayHelper::getValue($statuses, $this->status).'</span>';
        }
        return $return;
    }

    /**
     * @param $status
     *
     * @return mixed
     */
    public static function getStatus($status)
    {
        $array = self::getStatusArray();
        return $array[$status];
    }
}