<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "shop_product".
 *
 * @property integer $id
 * @property integer $shop_id
 * @property integer $product_id
 */
class ShopProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_id', 'product_id'], 'required'],
            [['shop_id', 'product_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'shop_id' => Yii::t('app', 'Магазин'),
            'product_id' => Yii::t('app', 'Продукт'),
        ];
    }
}
