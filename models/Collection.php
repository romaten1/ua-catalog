<?php

namespace app\models;

use app\models\query\CollectionQuery;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "collection".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $created_at
 */
class Collection extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'timestampBehavior' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ]
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collection';
    }

    /**
     * @return CollectionQuery
     */
    public static function find()
    {
        return new CollectionQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id'], 'required'],
            [['user_id', 'product_id', 'created_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'Користувач'),
            'product_id' => Yii::t('app', 'Продукт'),
            'created_at' => Yii::t('app', 'Створено'),
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
