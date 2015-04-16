<?php

use app\models\Lang;
use app\models\Product;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Product Langs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Product Lang'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'product_id',
                'value'     => function ( $model ) {
                    $product = Product::findOne( $model->product_id );
                    return $product->title;
                },
                'filter'    => ArrayHelper::map( Product::find()->all(), 'id', 'title' ),
            ],
            [
                'attribute' => 'lang_id',
                'value'     => function ( $model ) {
                    $lang = Lang::findOne( $model->lang_id );
                    return $lang->name;
                },
                'filter'    => ArrayHelper::map( Lang::find()->all(), 'id', 'name' ),
            ],
            'title',
            [
                'attribute' => 'description',
                'format'    => 'html',
                'value'     => function ( $model ) {
                    return StringHelper::truncateWords($model->description, 50);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
