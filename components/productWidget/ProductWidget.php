<?php
namespace app\components\productWidget;

use app\models\Manufacturer;
use app\models\Product;
use app\models\search\ProductCategorySearch;
use Yii;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

/**
 *
 * Основний клас для відображення і пошуку продуктів - використовується на головній сторінці та сторінках категорій
 *
 * Вміщує віджет фільтрування та категорій
 *
 * Пошук відбувається через окрему модель ProductCategorySearch() - в які реалізована логіка пошуку
 *
 * @package app\components\categoryWidget
 */
class ProductWidget extends Widget
{
    public $category_id;

    public $type_category;

    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */

    public function run()
    {
        $searchModel = new ProductCategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $this->category_id, $this->type_category);
        return $this->render('product', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'type_category' => $this->type_category,
            'category_id' => $this->category_id
        ]);
    }
}

?>