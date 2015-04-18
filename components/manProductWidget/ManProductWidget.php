<?php
namespace app\components\manProductWidget;

use app\models\Manufacturer;
use app\models\Product;
use Yii;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class ManProductWidget extends Widget
{
    public $manufacturer_id;

    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */

    public function run()
    {
        $dataProvider = new ActiveDataProvider( [
            'query' => Product::find()->where( [ 'manufacturer_id' => $this->manufacturer_id ] ),
        ] );
        return $this->render( 'manProduct', [
            'dataProvider' => $dataProvider,
        ] );
    }
}

?>