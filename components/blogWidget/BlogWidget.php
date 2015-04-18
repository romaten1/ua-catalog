<?php
namespace app\components\blogWidget;

use app\models\Manufacturer;
use app\models\News;
use app\models\Post;
use app\models\Product;
use Yii;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class BlogWidget extends Widget
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
            'query' => Post::find(),
            'sort'  => [
                'defaultOrder' => [
                    'created_at' => SORT_DESC,
                ]
            ],
            'pagination' => ['pageSize' => 3]
        ] );

        return $this->render( 'blog', [
            'dataProvider' => $dataProvider,
        ] );
    }
}

?>