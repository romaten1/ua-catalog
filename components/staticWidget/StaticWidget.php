<?php
namespace app\components\staticWidget;

use app\models\Manufacturer;
use app\models\Product;
use app\models\search\StaticPageSearch;
use app\models\StaticPage;
use Yii;
use yii\base\Widget;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * Виводить статичні сторінки задежно від категорії в футері
 *
 * @package app\components\categoryWidget
 */
class StaticWidget extends Widget
{
    public $type;

    public function init()
    {
        parent::init();

    }

    /**
     * @return string
     */
    public function run()    {
        $dataProvider = new ActiveDataProvider([
            'query' => StaticPage::find()->where(['type' => $this->type]),
        ]);
        return $this->render('static', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
?>