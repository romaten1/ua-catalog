<?php
namespace app\components\filterWidget;

use app\models\Manufacturer;
use app\models\Product;
use app\models\Shop;
use Yii;
use yii\base\Widget;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class FilterWidget extends Widget
{
    public $title;

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
            //'filter' => $filter,
            'region' => $region,
            'title' => $this->title
        ]);
    }
}
?>