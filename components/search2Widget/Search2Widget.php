<?php
namespace app\components\search2Widget;

use app\models\Manufacturer;
use app\models\Product;
use Yii;
use yii\base\Widget;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class Search2Widget extends Widget
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
        return $this->render('search2', [
        ]);
    }
}
?>