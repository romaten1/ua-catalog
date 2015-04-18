<?php
namespace app\components\searchWidget;

use app\models\Manufacturer;
use app\models\Product;
use Yii;
use yii\base\Widget;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class SearchWidget extends Widget
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
        $model = Product::find()->asArray()->all();

        return $this->render('search', [
            'model' => $model,
        ]);
    }
}
?>