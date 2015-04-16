<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product_lang".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $lang_id
 * @property string $title
 * @property string $description
 */
class ProductLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'lang_id', 'title', 'description'], 'required'],
            [['product_id', 'lang_id'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'lang_id' => Yii::t('app', 'Lang ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
