<?php
namespace app\components\filterWidget;

use app\models\Manufacturer;
use app\models\Product;
use app\models\Shop;
use Yii;
use yii\base\Widget;

/**
 *
 * Виводиться код відображення форм для пошуку продуктів по категоріях, виробниках, цінах та сортування по різних показниках
 * Фільтрування по категорії третього рівня ввімкнене для сторінок з категоріями другого рівня
 * Фільтрування по квиробнику ввімкнене для сторінок з категоріями третього рівня
 * На головній сторінці відімкнено показання сортування за ціною внаслідок конфлікту стилів
 *
 * @package app\components\categoryWidget
 */
class FilterWidget extends Widget
{
    public $title;

    public $category_id;

    public $category_type;

    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        $region = Shop::getSityArray();

        return $this->render('filter', [
            'region' => $region,
            'title' => $this->title,
            'category_id' => $this->category_id,
            'category_type' => $this->category_type,
        ]);
    }
}
?>