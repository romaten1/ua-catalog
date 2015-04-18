<?php

use app\models\Product;
use app\models\Shop;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ShopProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Shop Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Shop Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'shop_id',
                'value'     => function ( $model ) {
                    $shop = Shop::findOne( $model->shop_id );
                    return $shop->title;
                },
                'filter'    => Shop::getShopArray(),
            ],
            [
                'attribute' => 'product_id',
                'value'     => function ( $model ) {
                    $product = Product::findOne( $model->product_id );
                    return $product->title;
                },
                'filter'    => ArrayHelper::map( Product::find()->all(), 'id', 'title' ),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
