<?php

namespace app\models\rest;

use app\models\Category as CommonCategory;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $title
 * @property integer $created_at
 * @property string $class
 */
class Category extends CommonCategory
{
    /**
     * @return array
     */
    public function fields()
    {
        return [
            'id',
            'title' ,
        ];
    }
}