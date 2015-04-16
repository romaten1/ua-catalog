<?php

namespace app\models;

use app\modules\admin\models\ProductLang;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $title
 * @property double $price
 * @property integer $category_id
 * @property integer $manufacturer_id
 * @property integer $updated_at
 * @property integer $created_at
 * @property string $image
 * @property integer $status
 */
class Product extends Root
{
    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'category_id', 'manufacturer_id', 'image', 'status'], 'required'],
            [['price'], 'number'],
            [['category_id', 'manufacturer_id', 'updated_at', 'created_at', 'status'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Назва'),
            'price' => Yii::t('app', 'Ціна'),
            'category_id' => Yii::t('app', 'Категорія'),
            'manufacturer_id' => Yii::t('app', 'Виробник'),
            'updated_at' => Yii::t('app', 'оновлено'),
            'created_at' => Yii::t('app', 'Створено'),
            'image' => Yii::t('app', 'Фотографія'),
            'status' => Yii::t('app', 'Опубліковано'),
        ];
    }

    /**
     * @param null $lang_id
     *
     * @return static
     */
    public function getContent($lang_id = null)
    {
        $lang_id = ($lang_id === null)? Lang::getCurrent()->id : $lang_id;

        return $this->hasOne(ProductLang::className(), ['product_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => $lang_id]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManufacturer()
    {
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id']);
    }

    /**
     * @return array
     */
    public static function getProductArray()
    {
        $product = new Product;
        $product = $product->find()->asArray()->all();
        $titles = [];
        foreach($product as $item){
            $titles[$item['id']] = $item['title'];
        }
        return array_unique($titles);
    }
}