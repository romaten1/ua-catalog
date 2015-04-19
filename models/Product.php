<?php

namespace app\models;

use app\models\query\ProductQuery;
use app\modules\admin\models\ProductLang;
use app\modules\admin\models\ShopProduct;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

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
     * @return ProductQuery
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
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
            [['title', 'price', 'category_id', 'manufacturer_id', 'status'], 'required'],
            [['price'], 'number'],
            [['category_id', 'manufacturer_id', 'updated_at', 'created_at', 'status'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
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
        // Для перевірки наявності перекладу поточною мовою
        $is_translate = ProductLang::find()->where(['product_id' => $this->id, 'lang_id' => $lang_id ])->one();
        // Якщо немає перекладу для поточної мови - отримуємо дані для мови, встановленої по замовчуванню
        if(!$is_translate){
            $result = $this->hasOne(ProductLang::className(), ['product_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => Lang::getDefaultLang()->id]);
        }else{
            // Якщо є переклад - виводимо його
            $result = $this->hasOne(ProductLang::className(), ['product_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => $lang_id]);
        }
        return $result;
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
        $product = new self;
        $product = $product->find()->asArray()->all();
        $titles = [];
        foreach($product as $item){
            $titles[$item['id']] = $item['title'];
        }
        return $titles;
    }

    /**
     * @return array
     */
    public static function getMaxPrice()
    {
        $max = max(ArrayHelper::map(Product::find()->all(), 'id', 'price'));
        return $max;
    }

    public function getShop()
    {
        return $this->hasMany(Shop::className(), ['id' => 'shop_id'])
                    ->viaTable(ShopProduct::tableName(), ['product_id' => 'id']);
    }



}
