<?php
namespace app\components\newsWidget;

use app\models\Manufacturer;
use app\models\News;
use app\models\Product;
use Yii;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class NewsWidget extends Widget
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
        $dataProvider = new ActiveDataProvider( [
            'query' => News::find()->limit(10),
            'sort'  => [
                'defaultOrder' => [
                    'created_at' => SORT_DESC,
                ]
            ],
        ] );
        return $this->render( 'news', [
            'dataProvider' => $dataProvider,
        ] );
    }
}

?>