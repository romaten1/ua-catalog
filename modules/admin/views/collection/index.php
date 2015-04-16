<?php

use app\models\Product;
use dektrium\user\models\User;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CollectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Collections');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collection-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Collection'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'user_id',
                'value'     => function ( $model ) {
                    $user = User::findOne( $model->user_id );
                    return $user->username;
                },
                //'filter'    => User::getUserArray(),
            ],

            [
                'attribute' => 'product_id',
                'value'     => function ( $model ) {
                    $product = Product::findOne( $model->product_id );
                    return $product->title;
                },
                //'filter'    => Product::getProductArray(),
            ],
            [
                'attribute' => 'created_at',
                'format'    => 'date',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
