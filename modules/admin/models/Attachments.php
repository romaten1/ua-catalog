<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "attachments".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $image
 * @property integer $created_at
 */
class Attachments extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attachments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'image', 'created_at'], 'required'],
            [['product_id', 'created_at'], 'integer'],
            [['image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Продукт'),
            'image' => Yii::t('app', 'Фотографія'),
            'created_at' => Yii::t('app', 'Створено'),
        ];
    }
}
