<?php

namespace app\models;

use app\modules\admin\modules\category\models\CategoryThirdLang;
use app\modules\admin\modules\category\models\CategoryThirdManufacturer;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "category_third".
 *
 * @property integer $id
 * @property string $title
 * @property integer $parent_id
 * @property integer $created_at
 */
class CategoryThird extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'timestampBehavior' => [
                'class'      => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => [ 'created_at' ],
                ]
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_third';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ [ 'title', 'parent_id' ], 'required' ],
            [ [ 'parent_id', 'created_at' ], 'integer' ],
            [ [ 'title' ], 'string', 'max' => 255 ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'         => Yii::t( 'app', 'ID' ),
            'title'      => Yii::t( 'app', 'Title' ),
            'parent_id'  => Yii::t( 'app', 'Parent ID' ),
            'created_at' => Yii::t( 'app', 'Created At' ),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne( CategorySecond::className(), [ 'id' => 'parent_id' ] );
    }

    /**
     * @return array
     */
    public static function getCategoriesArray()
    {
        $product = new self;
        $product = $product->find()->asArray()->all();
        $titles  = [ ];

        foreach ($product as $item) {
            $second              = CategorySecond::findOne( $item['parent_id'] );
            $first               = Category::findOne( $second->parent_id );
            $second_title        = $second->title;
            $first_title         = $first->title;
            $titles[$item['id']] = $item['title'] . ' / ' . $second_title . ' / ' . $first_title;
        }
        return $titles;
    }

    public static function getFullCategory( $category_id )
    {
        $category     = new self;
        $category     = $category->findOne( $category_id );
        $second       = CategorySecond::findOne( $category->parent_id );
        $first        = Category::findOne( $second->parent_id );
        $second_title = $second->title;
        $first_title  = $first->title;
        $title        = $first_title . ' / ' . $second_title . ' / ' . $category->title;

        return $title;
    }

    /**
     * @param null $lang_id
     *
     * @return static
     */
    public function getContent( $lang_id = null )
    {
        $lang_id = ( $lang_id === null ) ? Lang::getCurrent()->id : $lang_id;
        // Для перевірки наявності перекладу поточною мовою
        $is_translate = CategoryThirdLang::find()->where( [
            'category_id' => $this->id,
            'lang_id'     => $lang_id
        ] )->one();
        // Якщо немає перекладу для поточної мови - отримуємо дані для мови, встановленої по замовчуванню
        if ( ! $is_translate) {
            $result = $this->hasOne( CategoryThirdLang::className(),
                [ 'category_id' => 'id' ] )->where( 'lang_id = :lang_id',
                [ ':lang_id' => Lang::getDefaultLang()->id ] );
        } else {
            // Якщо є переклад - виводимо його
            $result = $this->hasOne( CategoryThirdLang::className(),
                [ 'category_id' => 'id' ] )->where( 'lang_id = :lang_id', [ ':lang_id' => $lang_id ] );
        }
        return $result;
    }

    /**
     * @param $category_id
     * @param null $manufacturer
     *
     * @return mixed
     */
    public static function getProductIds( $category_id, $manufacturer = null )
    {
        $products = Product::find()->where( [ 'category_id' => $category_id ] )->all();
        if ($manufacturer) {
            $products = Product::find()->where( [ 'category_id'  => $category_id,
                                                  'manufacturer' => $manufacturer
                ] )->all();
        }
        $array_id = [ ];
        foreach ($products as $item) {
            $array_id[] = $item['id'];
        }
        return $array_id;
    }

    /**
     * @param $category_id
     *
     * @return array
     */
    public static function getBreadcrumbs( $category_id )
    {
        $category = self::findOne( $category_id );
        $second   = CategorySecond::findOne( $category->parent_id );
        $first    = Category::findOne( $second->parent_id );
        return Html::a( $first->title, [ '/category/view', 'id' => $first->id ] ) . ' / ' .
               Html::a( $second->title, [ '/category-second/view', 'id' => $second->id ] ) . ' / ' .
               $category->title;
    }

    /**
     * @param $category_id
     *
     * @return static[]
     */
    public static function getManufacturers( $category_id )
    {
        $product = Product::find()->where(['category_id' => $category_id])->all();
        $manufacturer = [ ];
        foreach ($product as $item) {
            $manufacturer[] = $item->manufacturer_id;
        }
        $manufacturers = Manufacturer::findAll( array_unique($manufacturer) );
        //VarDumper::dump($manufacturer); die();
        return $manufacturers;
    }


}
