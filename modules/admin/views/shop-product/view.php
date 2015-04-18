<?php

use app\models\Product;
use app\models\Shop;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ShopProduct */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('app', 'Список'), ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Створити'), ['create'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'shop_id',
                'value'     => Shop::findOne(['id' => $model->shop_id])->title,
                'format'    => 'html'
            ],

            [
                'attribute' => 'product_id',
                'value'     => Product::findOne(['id' => $model->product_id])->title,
                'format'    => 'html'
            ],

        ],
    ]) ?>

</div>
