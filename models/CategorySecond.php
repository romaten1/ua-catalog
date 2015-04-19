<?php

namespace app\models;

use app\modules\admin\modules\category\models\CategorySecondLang;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\Html;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "category_second".
 *
 * @property integer $id
 * @property string $title
 * @property integer $parent_id
 * @property integer $created_at
 */
class CategorySecond extends ActiveRecord
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
        return 'category_second';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'parent_id'], 'required'],
            [['parent_id', 'created_at'], 'integer'],
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
            'title' => Yii::t('app', 'Назва'),
            'parent_id' => Yii::t('app', 'Категорія вищого рівня'),
            'created_at' => Yii::t('app', 'Створено'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return array
     */
    public static function getCategoriesArray()
    {
        $category = new self;
        $category = $category->find()->asArray()->all();

        $titles = [];
        foreach($category as $item){
           //VarDumper::dump($item['parent_id']);die();
            $titles[$item['id']] = $item['title'] . ' / ' . Category::findOne($item['parent_id'])->title ;
        }
        return $titles;
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
        $is_translate = CategorySecondLang::find()->where(['category_id' => $this->id, 'lang_id' => $lang_id ])->one();
        // Якщо немає перекладу для поточної мови - отримуємо дані для мови, встановленої по замовчуванню
        if(!$is_translate){
            $result = $this->hasOne(CategorySecondLang::className(), ['category_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => Lang::getDefaultLang()->id]);
        }else{
            // Якщо є переклад - виводимо його
            $result = $this->hasOne(CategorySecondLang::className(), ['category_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => $lang_id]);
        }
        return $result;
    }

    /**
     * @param $category_id
     *
     * @return array
     */
    public static function getProductIds( $category_id )
    {
        $third = CategoryThird::find()->where(['parent_id' => $category_id])->all();
        //VarDumper::dump( $third ); die();
        $array_id  =[];
        foreach($third as $item){
            $array_id  = array_merge($array_id, CategoryThird::getProductIds($item->id));
        }
        return array_unique($array_id);
    }

    /**
     * @param $category_id
     *
     * @return array
     */
    public static function getBreadcrumbs($category_id)
    {
        $category = self::findOne($category_id);
        $first = Category::findOne($category->parent_id);
        return Html::a($first->title, ['/category/view', 'id'=>$first->id]) . ' / ' .
               $category->title;
    }

}
