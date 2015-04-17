<?php

namespace app\modules\admin\modules\category\models;

use Yii;

/**
 * This is the model class for table "category_third__manufacturer".
 *
 * @property integer $id
 * @property integer $manufacturer_id
 * @property integer $category_id
 */
class CategoryThirdManufacturer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_third__manufacturer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manufacturer_id', 'category_id'], 'required'],
            [['manufacturer_id', 'category_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'manufacturer_id' => Yii::t('app', 'Виробник'),
            'category_id' => Yii::t('app', 'Категорія третього рівня'),
        ];
    }
}
