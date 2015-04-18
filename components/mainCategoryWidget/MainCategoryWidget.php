<?php
namespace app\components\mainCategoryWidget;

use app\models\Category;
use app\models\CategorySecond;
use app\models\CategoryThird;
use app\models\Manufacturer;
use app\models\Product;
use Yii;
use yii\base\Widget;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class MainCategoryWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        $category_main = Category::find()->asArray()->all();
        $category_second = CategorySecond::find()->asArray()->all();
        $category_third = CategoryThird::find()->asArray()->all();
        return $this->render('main-category', [
            'category_main' => $category_main,
            'category_second' => $category_second,
            'category_third' => $category_third,
        ]);
    }
}
?>