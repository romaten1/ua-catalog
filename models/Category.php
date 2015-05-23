<?php

namespace app\models;

use app\modules\admin\modules\category\models\CategoryLang;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $title
 * @property integer $created_at
 * @property string $class
 */
class Category extends ActiveRecord
{
    public $catTitle;
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
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ [ 'title' ], 'required' ],
            [ [ 'created_at' ], 'integer' ],
            [ [ 'title' ], 'string', 'max' => 255 ],
            [ [ 'class' ], 'string', 'max' => 100 ],
            [ [ 'catTitle' ], 'safe' ],
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
            'created_at' => Yii::t( 'app', 'Created At' ),
            'class'      => Yii::t( 'app', 'Class' ),
        ];
    }

    public function afterFind()
    {
        parent::afterFind();
        $this->title = $this->getCatTitle( );
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
            $titles[$item['id']] = $item['title'];
        }
        return array_unique( $titles );
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
        $is_translate = CategoryLang::find()->where( [ 'category_id' => $this->id, 'lang_id' => $lang_id ] )->one();
        // Якщо немає перекладу для поточної мови - отримуємо дані для мови, встановленої по замовчуванню
        if ( ! $is_translate) {
            $result = $this->hasOne( CategoryLang::className(),
                [ 'category_id' => 'id' ] )->where( 'lang_id = :lang_id',
                [ ':lang_id' => Lang::getDefaultLang()->id ] );
        } else {
            // Якщо є переклад - виводимо його
            $result = $this->hasOne( CategoryLang::className(),
                [ 'category_id' => 'id' ] )->where( 'lang_id = :lang_id', [ ':lang_id' => $lang_id ] );
        }
        return $result;
    }

    public function getCatTitle( )
    {

        if ( ! $this->content->title) {
            $title = $this->title;
        } else {
            $title = $this->content->title;
        }
        return $title;
    }




    /**
     * @param $category_id
     *
     * @return array
     */
    public static function getProductIds( $category_id )
    {
        $second = CategorySecond::find()->where( [ 'parent_id' => $category_id ] )->all();
        //VarDumper::dump( $third ); die();
        $array_id = [ ];
        foreach ($second as $item) {
            $array_id = array_merge( $array_id, CategorySecond::getProductIds( $item->id ) );
        }
        return array_unique( $array_id );
    }

    /**
     * @param $category_id
     *
     * @return array
     */
    public static function getBreadcrumbs($category_id)
    {
        return self::findOne($category_id)->title;
    }


}
