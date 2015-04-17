<?php

use app\models\CategoryThird;
use app\models\Manufacturer;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modules\category\models\CategoryThirdManufacturerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Category Third Manufacturers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-third-manufacturer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Category Third Manufacturer'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'manufacturer_id',
                'value'     => function ( $model ) {
                    $category = Manufacturer::findOne( $model->manufacturer_id );
                    return $category->title;
                },
                'filter'    => Manufacturer::getManufacturersArray(),
            ],
            [
                'attribute' => 'category_id',
                'value'     => function ( $model ) {
                    $category = CategoryThird::findOne( $model->category_id );
                    return $category->title;
                },
                'filter'    => CategoryThird::getCategoriesArray(),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
