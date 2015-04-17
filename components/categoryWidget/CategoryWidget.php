<?php
namespace app\components\categoryWidget;

use app\models\Category;
use app\models\CategorySecond;
use app\models\CategoryThird;
use app\models\Manufacturer;
use app\modules\admin\modules\category\models\CategoryThirdManufacturer;
use Yii;
use yii\base\Widget;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class CategoryWidget extends Widget
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
        //$category = CategoryThird::find()->all();
        $category_main = Category::find()->asArray()->all();
        $category_second = CategorySecond::find()->asArray()->all();
        $category_third = CategoryThird::find()->asArray()->all();
        $manufacturers = Manufacturer::find()->asArray()->all();
        $category_manufacturer = CategoryThirdManufacturer::find()->asArray()->all();
        return $this->render('category', [
            'category_main' => $category_main,
            'category_second' => $category_second,
            'category_third' => $category_third,
            'manufacturers' => $manufacturers,
            'category_manufacturer' => $category_manufacturer
        ]);
    }
}
?>