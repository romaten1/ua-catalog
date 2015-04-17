<?php
namespace app\components\manufacturerWidget;

use app\models\Manufacturer;
use Yii;
use yii\base\Widget;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class ManufacturerWidget extends Widget
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
        $manufacturers = Manufacturer::find()->asArray()->all();

        return $this->render('manufacturer', [
            'manufacturers' => $manufacturers,
        ]);
    }
}
?>